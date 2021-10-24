<?php

declare(strict_types=1);

namespace App\Models;

class Treino extends Model
{
    public function __construct()
    {
        parent::__construct('treinos', ['id'], ['nome', 'descricao']);
    }
}
