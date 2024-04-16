<?php

namespace App\Repository;

use App\Models\Market\Follower;
use App\Models\Market\Following;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProfRepo
{
    public $ad;

    //const



    public function findUser(User $ad)
    {
        return $user =
            $this->ad = User::find($ad);

        throw_if(auth()->user() == true, $auth = auth()->user()->id);
        // if (auth()->user()) {
        //     $auth = auth()->user()->id;
        // } else {
        // }
    }

    public function followingClick(User $following, Following $modelFollowing, Follower $modelFollower)
    {
        $user = Auth::user();
        $user->followings()->attach($following->id);
        $following->followers()->attach($user->id);
        return redirect()->back();
    }

    public function unFollloClick($id)
    {
        $part = parse_url($_SERVER['HTTP_REFERER']);
        $path_parse = explode('/', $part['path'], 3);
        $post = Following::where('user_id', Auth::user()->id)->where('following_id', $path_parse[2]);
        $result = $post->delete();
        $follower = Follower::where('user_id', $path_parse[2])->where('follower_id', Auth::user()->id);
        $res = $follower->delete();
        return redirect()->back();
    }
}
