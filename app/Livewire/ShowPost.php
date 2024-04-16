<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    

    public $posts;
    public $page = 1;
    public $perPage = 5;

    public function mount()
    {
        $this->loadUsers();
    }

    public function loadUsers()
    {
        $this->posts = Post::paginate($this->perPage, ['*'], 'page', $this->page)->items();
    }

    public function nextPage()
    {
        $this->page++;
        $this->loadUsers();
    }

    public function previousPage()
    {
        if ($this->page > 1) {
            $this->page--;
            $this->loadUsers();
        }
    }

    public function render()
    {
        $totalPosts = Post::count();

        return view('livewire.show-post', ['totalPosts' => $totalPosts]);
    }
}
