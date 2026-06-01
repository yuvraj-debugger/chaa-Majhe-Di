<?php

namespace App\Services;

use App\Models\Gallery;
use App\Models\Menu;

class HomeService
{
    public function getWelcomeData(): array
    {
        return [
            'galleries' => Gallery::latest()->get(),
            'menus' => Menu::latest()->get(),
        ];
    }
}
