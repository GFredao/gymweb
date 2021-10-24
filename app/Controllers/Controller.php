<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Admin;
use App\Models\Cliente;
use App\Models\Dieta;
use App\Models\Objetivo;
use App\Models\Treino;

abstract class Controller
{
    protected Cliente $cliente;

    public function __construct()
    {
        $this->cliente = new Cliente();
    }
}
