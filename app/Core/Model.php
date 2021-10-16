<?php

declare(strict_types=1);

namespace App\Core;

use App\Suporte\Message;

abstract class Model
{
    protected static $instancia;

    /** @var array|object|null */
    protected $dados;

    /** @var Message */
    protected $mensagem;

    protected static string $entidade;

    protected array $camposProtegidos;

    protected array $camposObrigatorios;

    /**
     * Construtor da classe Model
     * @param string $entidade (Nome da tabela do Banco de Dados)
     * @param array $camposProtegidos (Campos protegidos do Banco de Dados)
     * @param array $camposObrigatorios (Campos obrigatorios do Banco de Dados)
     */
    public function __construct(string $entidade, array $camposProtegidos, array $camposObrigatorios)
    {
        $this->entidade = $entidade;
        $this->camposProtegidos = $camposProtegidos;
        $this->camposObrigatorios = $camposObrigatorios;
    }

    public function __set($nome, $valor)
    {
        if (empty($this->dados)) {
            $this->dados = new \stdClass();
        }

        $this->dados->$nome = $valor;
    }

    public function __isset($nome)
    {
        return isset($this->dados->$nome);
    }

    public function __get($nome)
    {
        return $this->dados->$nome ?? null;
    }

    /**
     * @return object|null
     */
    public function dados(): ?object
    {
        return $this->dados;
    }

    /**
     * @return Message|null
     */
    public function mensagem(): ?Message
    {
        return $this->mensagem;
    }

    public static function obtemONomeDaTabela(): string
    {
        return strtolower(self::$entidade);
    }
}
