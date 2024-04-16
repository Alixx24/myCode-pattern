<?php

namespace App\Livewire\Customer\Home;

use App\Models\Admin\Description as AdminDescription;
use Livewire\Component;

class Description extends Component
{
    public $desc;
    public function mount()
    {
         $res = $this->desc = AdminDescription::where('position', 1)->first();
   
    }
    public function render()
    {
        return view('livewire.customer.home.description');
    }
}
