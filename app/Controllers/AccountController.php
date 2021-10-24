<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Views\View;

class AccountController extends Controller
{
    public function index(): void
    {
        echo View::make('signup');
    }

    public function signin(): void
    {
        echo View::make('signin');
    }
}
