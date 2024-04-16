<?php

namespace App\Livewire\Panel\Ad;

use App\Models\Admin\Price;
use App\Models\User;

use Illuminate\Http\Request;
use Livewire\Component;

class Create extends Component
{

    public $selectFrom;
    public $selectFor;
    public $selectPrice;

    public function mount()
    {
        $this->selectFrom = User::all();
        $this->selectFor = User::all();
        $this->selectPrice = Price::all();
    }



    public function render()
    {

        return view('livewire.panel.ad.create')->extends('components.layouts.master');
    }
}
