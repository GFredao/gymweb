<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Views\View;

class ClienteController extends Controller
{
    public function index(): void
    {
        echo View::make('clientes/index');
    }

    public function perfil(): void
    {
        echo View::make('clientes/perfil');
    }

    public function userprofile(): void
    {
        echo View::make('clientes/userprofile');
    }
}
