<?php

namespace App\Http\Livewire;

use App\Models\Banner;
use Livewire\Component;

class HomeBanners extends Component
{
    public $banners;

    public $activeBanner;

    public function mount()
    {
        $this->banners = Banner::all();

        $this->activeBanner = $this->banners->first();
    }

    public function render()
    {
        return view('home-banners');
    }
}
