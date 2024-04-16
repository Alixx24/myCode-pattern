<?php

namespace App\Livewire\Panel;

use App\Models\User;
use Livewire\Component;

class UserPanel extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all();

    }
    public function render()
    {
        return view('livewire.panel.user-panel')->extends('components.layouts.master-live-col-one');
    }
}
