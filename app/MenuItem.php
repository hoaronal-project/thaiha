<?php

namespace App;

class MenuItem
{
    public $link;

    public $text;

    public function __construct($link, $text)
    {
        $this->link = $link;
        $this->text = $text;
    }
}
