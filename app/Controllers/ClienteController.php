<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Views\View;

class ClienteController extends Controller
{
    public function index()
    {
        echo View::make('cliente/index');
    }

    public function cadastro()
    {
        echo View::make('cliente/cadastro');
    }

    public function login()
    {
        echo View::make('cliente/login');
    }

    public function logoff()
    {
        echo View::make('cliente/logoff');
    }
}
