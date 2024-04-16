<?php

namespace App\Livewire\Customer;

use App\Models\Admin\Ad;
use App\Models\Market\Following;
use App\Models\User;
use Livewire\Component;

class AdShow extends Component
{
    public $ads;
    public $user;
    public $followers_count;
    public $following_count;
    public $ad;
 
    public function mount()
    {
        $this->ads = Ad::with('user.followers', 'user.following')->where('status', 1)->get();

    }
    public function render()
    {
        return view('livewire.customer.ad-show')->extends('components.layouts.master')->section('content');
    }
}
