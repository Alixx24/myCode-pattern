<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UserRegRequest;
use App\Http\Services\Image\ImageService;
use App\Models\Market\Follower;
use App\Models\Market\Following;
use App\Models\User;

use App\Repository\Panel\UserPanelRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public $following;
    public $modelFollowing;
    public $modelFollower;
    public $userRepo;

    public function __construct(User $following, Following $modelFollowing, Follower $modelFollower, UserPanelRepo $userRepo)
    {
        $this->following = $following;
        $this->modelFollowing = $modelFollowing;
        $this->modelFollower = $modelFollower;
        $this->userRepo = $userRepo;
        return back();
    }

    public function store(UserRegRequest $request, ImageService $imageService)
    {
        $result = $this->userRepo->store($request, $imageService);
    }


    public function update(Request $request, User $user)
    {

        $inputs = $request->all();

        $res = $user->update($inputs);
        return back();
    }
}
