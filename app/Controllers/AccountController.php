<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Views\View;

class AccountController extends Controller
{
    public function index()
    {
        echo View::make('signup');
    }

    public function signin()
    {
        echo View::make('signin');
    }
}
