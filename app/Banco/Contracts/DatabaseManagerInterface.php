<?php

declare(strict_types=1);

namespace App\Banco\Contracts;

interface DatabaseManagerInterface
{
    public function conecta(): \PDO;

    public function falha(): ?\PDOException;

    public function query(string $query, array $valores = []): ?array;

    public function leitura(?string $termos = null, ?string $parametros = null, string $colunas = '*'): ?\PDOStatement;

    public function criar(array $dados): ?int;

    public function atualizar(array $dados, string $termos, string $parametros): ?int;

    public function excluir(string $termos, ?string $parametros = null): bool;
}
