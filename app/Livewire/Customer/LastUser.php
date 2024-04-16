<?php

namespace App\Livewire\Customer;

use App\Models\Admin\Ad;
use App\Models\User;
use App\Repository\UserRepository;
use Livewire\Component;

class LastUser extends Component
{
    public $users;
    public Ad $ad;

    public function mount(UserRepository $userRepo)
    {
        $res = $userRepo->orderBy();
        $this->users =  $res;
    }
    public function showProf($ad)
    {
        return redirect()->route('customer.profile-public', $ad);
    }
    public function render()
    {
        return view('livewire.customer.last-user')->extends('components.layouts.app-lastUser')->section('content');
    }
}
