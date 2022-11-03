<?php

namespace App;

use Illuminate\Support\Collection;
use Livewire\Wireable;

class Menu implements Wireable
{
    public $items;

    public function __construct(Collection $items)
    {
        $this->items = $items;
    }

    public function toLivewire()
    {
        return $this->items;
    }

    public static function fromLivewire($value)
    {
        return new static($value);
    }
}
