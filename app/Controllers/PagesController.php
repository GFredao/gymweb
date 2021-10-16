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

    public function home()
    {
        echo View::make('pages/home');
    }

    public function sobre()
    {
        echo View::make('pages/sobre');
    }

    public function contato()
    {
        $informacoes = [
            'nome' => 'John Doe',
            'email' => 'john.doe@email.com',
            'fone' => '(00) 0000-0000'
        ];

        echo View::make('pages/contato', $informacoes);
    }

    public function parceria()
    {
        echo View::make('pages/parcerias');
    }
}
