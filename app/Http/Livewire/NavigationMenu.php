<?php

namespace App\Http\Livewire;

use App\Menu;
use Livewire\Component;

class NavigationMenu extends Component
{
    public $navigationMenu;

    public function mount(Menu $navigationMenu)
    {
        $this->navigationMenu = $navigationMenu;
    }

    public function render()
    {
        return view('navigation-menu');
    }
}
