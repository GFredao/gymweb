<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/config.php';
require __DIR__ . '/../app/Suporte/Helpers.php';

app()->run();

$model = new App\Models\Cliente();

$cliente = $model->where('id = :id', 'id = 1')->fetchAll();

var_dump($cliente);
