<?php

namespace App\Livewire\Customer\Home;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AboutMe extends Component
{
    public $about;
    public $introMe;
    public function mount()
    {

        $id = 8;
        $res =  $this->introMe = User::find($id);


        $value = Cache::remember('descriptions', 1200, function () {
            return DB::table('descriptions')->get();
        });

        $this->about = $value[0]->body;


        $contact = $value[1]->body;
    }
    public function render()
    {
        return view('livewire.customer.home.about-me');
    }
}
