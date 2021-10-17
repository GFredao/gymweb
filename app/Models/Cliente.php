<?php

declare(strict_types=1);

namespace App\Models;

class Cliente extends Model
{
    public function __construct()
    {
        parent::__construct('pessoas', ['id'], ['nome', 'sobrenome', 'email', 'senha']);
    }
}
