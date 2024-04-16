<?php

namespace App\Repository\Panel;

use App\Http\Requests\Auth\UserRegRequest;
use App\Http\Services\Image\ImageService;
use App\Models\User;

class UserPanelRepo
{
    
    public function store(UserRegRequest $request,ImageService $imageService)
    {
        $inputs = $request->all();

        if ($request->hasFile('avatar')) {
            $imageService->setExclusiveDirectory('avatar' . DIRECTORY_SEPARATOR . 'avatar-users');
            $result = $imageService->createIndexAndSave($request->file('avatar'));
            if ($result === false) {
                return redirect()->route('customer.home')->with('swal-error', 'آپلود تصویر با خطا مواجه شد');
            }
            $inputs['avatar'] = $result;
        }
        $res = User::create($inputs);
        return redirect('/');
    }
}
