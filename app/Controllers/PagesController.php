<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Views\View;

class PagesController extends Controller
{
    public function index()
    {
        echo View::make('pages/index');
    }

    public function sobre()
    {
        echo View::make('pages/sobre');
    }

    public function contato()
    {
        echo View::make('pages/contato');
    }

    public function parceria()
    {
        echo View::make('pages/parcerias');
    }
}
