<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Views\View;

class PagesController extends Controller
{
    public function index(): void
    {
        echo View::make('pages/home');
    }
}
