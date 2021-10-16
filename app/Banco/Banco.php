<?php

declare(strict_types=1);

namespace App\Banco;

use App\Banco\Contracts\DatabaseManagerInterface;

class Banco implements DatabaseManagerInterface
{
    /** @var \PDO */
    protected static $conexao;

    /** @var \PDOException */
    protected $falha;

    private const OPCOES = [
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_CASE => \PDO::CASE_NATURAL
    ];

    /**
     * @return \PDO
     * @throws \PDOException
     */
    public function conecta(): \PDO
    {
        if (! self::$conexao) {
            try {
                self::$conexao = new \PDO(MYSQL_DSN, DB_USER, DB_PASS, self::OPCOES);
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }
        }

        return self::$conexao;
    }

    /**
     * @return \PDOException|null
     */
    public function falha(): ?\PDOException
    {
        return $this->falha;
    }

    /**
     * @param string $query
     * @param array $valores
     * @return array|null
     */
    public function query(string $query, array $valores = []): ?array
    {
        try {
            $stmt = self::$conexao->prepare($query);

            for ($i = 1; $i <= count($valores); $i++) {
                $stmt->bindValue($i, $valores[$i - 1]);
            }

            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\PDOException $exception) {
            $this->falha = $exception;
            return null;
        }
    }
}
