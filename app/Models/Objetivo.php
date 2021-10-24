<?php

declare(strict_types=1);

namespace App\Models;

class Objetivo extends Model
{
    public function __construct()
    {
        parent::__construct('objetivos', ['id'], ['nome', 'descricao']);
    }
}
