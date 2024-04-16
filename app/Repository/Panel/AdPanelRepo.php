<?php

namespace App\Repository\Panel;

use App\Http\Requests\Auth\UserRegRequest;
use App\Http\Requests\panel\AdRequest;
use App\Http\Services\Image\ImageService;
use App\Models\Admin\Ad;
use App\Models\User;
use Illuminate\Http\Request;

class AdPanelRepo
{

    public function store(Request $request, ImageService $imageService)
    {
        $inputs = $request->all();
        $inputs['status'] = 1;

        if($request->hasFile('image'))
        {
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'ads');
            $result = $imageService->createIndexAndSave($request->file('image'));
            if ($result === false) {
                return redirect()->route('panel.users.ads')->with('swal-error', 'آپلود تصویر با خطا مواجه شد');
            }
            $inputs['image'] = $result;
        }
        $result = Ad::create($inputs);
       return Redirect ('panel/users/ads/');
    }

    public function update(Ad $ad, Request $request, ImageService $imageService)
    {
        $inputs = $request->all();
        
        if ($request->hasFile('image')) {
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'ads');
            $result = $imageService->createIndexAndSave($request->file('image'));
            if ($result === false) {
                return redirect()->route('panel.users.ads')->with('swal-success', 'error Upload Image');            }
            $inputs['image'] = $result;
        }
        $ad->update($inputs);
        return redirect()->route('panel.users.ads')->with('swal-success', 'دسته بندی شما با موفقیت ویرایش شد');

    }
}
