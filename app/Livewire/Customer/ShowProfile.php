<?php

namespace App\Livewire\Customer;

use App\Models\Market\Follower;
use App\Models\Market\Following;
use App\Models\User;
use App\Repository\ProfRepo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Redirect;

class ShowProfile extends Component
{
    public $id;
    public $ad;
    public $following;
    public $haveFollow;
    public $result;
    public $response;
    public $user;
    public $profRepo;
    public $userCons;
    public $modelFollowing;
    public $modelFollower;


    public function mount(ProfRepo $profRepo, User $ad)
    {
        $res = $profRepo->findUser($ad);
        $this->ad =  $res;
    }

    public function followingClick(ProfRepo $profRepo, User $following, Following $modelFollowing, Follower $modelFollower)
    {
        $res = $profRepo->followingClick($following, $modelFollowing, $modelFollower);
    }

    public function unfollowClick(ProfRepo $profRepo, $id)
    {
        $res = $profRepo->unFollloClick($id);
    }

    public function render(User $user)
    {
        return view('livewire.customer.show-profile')->extends('components.layouts.post-admin')->section('content');
    }
}
