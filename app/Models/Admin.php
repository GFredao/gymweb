<?php

declare(strict_types=1);

namespace App\Models;

class Admin extends Model
{
    public function __construct()
    {
        parent::__construct('pessoas', ['id'], ['nome_completo', 'email', 'senha']);
    }
}
