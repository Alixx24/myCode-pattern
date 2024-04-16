<?php

namespace App\Livewire;

use App\Models\Admin\Ad;
use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    public $ads;
    public $user;

    public function mount(User $user)
    {
        $this->user = User::find($user);
    }
    public function render(User $user)
    {
        return view('livewire.home', [
            'ads' => Ad::all(), 'user' => User::find($user)
        ])->extends('components.layouts.master')->section('content');
    }
}
