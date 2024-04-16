<?php

namespace App\Livewire\Panel;

use App\Models\User;
use Livewire\Component;

class UserUpdate extends Component
{
    public $user;

    public function mount($id)
    {
        $this->user = User::find($id);
    }
    public function render()
    {
        
        return view('livewire.panel.user-update')->extends('components.layouts.master-live-col-one');
    }
}
