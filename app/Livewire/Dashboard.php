<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Dashboard extends Component
{
    public $posts;

    public function mount()
    {
       $this->posts = Post::all();
       

    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
