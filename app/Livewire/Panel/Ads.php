<?php

namespace App\Livewire\Panel;

use App\Models\Admin\Ad;
use App\Models\Admin\Price;
use App\Models\User;
use Livewire\Component;

class Ads extends Component
{
    public $ads;
    public $selectFrom;
    public function mount()
    {
        $this->ads = Ad::all();
        $res = $this->selectFrom = User::all();
    }
    public function updateStatus($adId)
    {
        $ad = Ad::find($adId);

        $ad->status = $ad->status == 1 ? 0 : 1;
        $ad->save();
    }

    public function render()
    {
        return view('livewire.panel.ads');
    }

    public function create()
    {

        return view('livewire.panel.ad.create')->extends('components.layouts.app')->section('content');
    }
}
