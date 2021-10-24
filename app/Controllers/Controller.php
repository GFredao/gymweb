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
    protected Admin $admin;

    protected Cliente $cliente;

    protected Dieta $dieta;

    protected Objetivo $objetivo;
    
    protected Treino $treino;

    public function __construct()
    {
        $this->admin = new Admin();
        $this->cliente = new Cliente();
        $this->dieta = new Dieta();
        $this->objetivo = new Objetivo();
        $this->treino = new Treino();
    }
}
