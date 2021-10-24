<?php

declare(strict_types=1);

namespace App\Models;

class Dieta extends Model
{
    public function __construct()
    {
        parent::__construct('dietas', [], []);
    }
}
