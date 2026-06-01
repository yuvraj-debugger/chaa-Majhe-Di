<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(
        protected HomeService $homeService
    ) {}

    public function index(): View
    {
        return view('welcome', $this->homeService->getWelcomeData());
    }
}
