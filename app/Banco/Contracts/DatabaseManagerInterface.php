<?php

declare(strict_types=1);

namespace App\Banco\Contracts;

interface DatabaseManagerInterface
{
    public function conecta(): \PDO;

    public function falha(): ?\PDOException;

    public function query(string $query, array $valores = []): ?array;
}
