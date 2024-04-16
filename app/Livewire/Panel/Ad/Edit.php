<?php

namespace App\Livewire\Panel\Ad;

use App\Models\Admin\Ad;
use App\Models\Admin\Price;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public $ad;
    public $selectFrom;
    public $selectFor;
    public $selectPrice;
    public function mount($id)
    {
        $this->ad = Ad::find($id);
        $this->selectFrom = User::all();
        $this->selectFor = User::all();
        $this->selectPrice = Price::all();
    }


    public function render()
    {
        
        return view('livewire.panel.ad.edit')->extends('components.layouts.master');
    }
}
