<?php

namespace App\Livewire\Customer;

use App\Models\Admin\Ad;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class TopUser extends Component
{
    public $topUser;
    public $user;


    public function mount(User $user)
    {
        $this->topUser = Ad::with('user.followers', 'user.following')->get()->unique('id')->take(100);

        $this->user = User::find($user);
       
        // $this->topUser = Ad::withCount('followers', 'following')->get()->unique('user_id')->take(10);

    }

    public function showProf($ad)
    {
      
        return redirect()->route('customer.profile-public', $ad);
    }

    public function render()
    {
        return view('livewire.customer.top-user');
    }
}
