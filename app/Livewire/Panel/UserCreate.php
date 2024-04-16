<?php

namespace App\Livewire\Panel;

use Livewire\Component;

class UserCreate extends Component
{
    public function render()
    {
        
        return view('livewire.panel.user-create')->extends('components.layouts.appuser')->section('content');
    }
}
