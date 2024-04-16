<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\panel\AdRequest;
use App\Http\Services\Image\ImageService;
use App\Livewire\Panel\Ads;
use App\Models\Admin\Ad as AdminAd;
use App\Models\Post;
use App\Repository\Panel\AdPanelRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdController extends Controller
{
    public $adRepo;

    public function __construct(AdPanelRepo $adRepo)
    {
        $this->adRepo = $adRepo;
    }

    public function store(AdRequest $request, ImageService $imageService)
    {
      $result = $this->adRepo->store($request, $imageService);
       
    }

    public function edit(AdminAd $ad)
    {
        $res = AdminAd::find($ad);
        
    }

    public function update(AdminAd $ad, Request $request, ImageService $imageService)
    {
     
        $result = $this->adRepo->update($ad, $request, $imageService);
    }
}
