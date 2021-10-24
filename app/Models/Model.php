<?php

declare(strict_types=1);

namespace App\Models;

use App\Suporte\Message;

abstract class Model
{
    /** @var array|object|null */
    protected $dados;

    protected static $instancia;

    protected static $entidade;

    protected array $camposProtegidos;

    protected array $camposObrigatorios;

    public function __construct(string $entidade, array $camposProtegidos, array $camposObrigatorios)
    {
        self::$entidade = $entidade;
        $this->camposProtegidos = array_merge($camposProtegidos, ['data_cadastro', 'data_atualizacao']);
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

    public function falha(): ?\PDOException
    {
        return app()->banco->falha();
    }

    /**
     * @return Message|null
     */
    public function mensagem(): ?Message
    {
        return app()->mensagem;
    }

    /**
     * @param array $dados
     * @return integer|null
     */
    public function criar(array $dados): ?int
    {
        self::$instancia = static::class;

        return app()->banco->criar($this->filtro($dados));
    }

    public function atualizar(array $dados, string $termos, string $parametros): ?int
    {
        self::$instancia = static::class;

        return app()->banco->atualizar($this->filtro($dados), $termos, $parametros);
    }

    public function salvar(): bool
    {
        if (! $this->camposObrigatorios()) {
            echo 'Preencha todos os campos obrigatórios';
            return false;
        }

        # Se o usuário já existe, atualize os dados.
        if (! empty($this->id)) {
            $id = (int)$this->id;

            $this->atualizar($this->estaSeguro(), "id = :id", "id = $id");
            if ($this->falha()) {
                echo 'Erro ao atualizar registro. Verifique os dados e tente novamente.';
                return false;
            }
        }

        # Se o usuário não existe, efetue o cadastro.
        if (empty($this->id)) {
            $id = $this->criar($this->estaSeguro());

            if ($this->falha()) {
                echo 'Erro ao cadastrar cliente. Verifique os dados e tente novamente.';
                return false;
            }
        }

        $this->dados = $this->buscaPorId($id)->dados();
        return true;
    }

    /**
     * @param integer $id
     * @param string $colunas
     * @return Model|null
     */
    public function buscaPorId(int $id, string $colunas = '*'): ?Model
    {
        $busca = $this->where("id = :id", "id = $id", $colunas)->fetchObject(static::class);
        if (! $busca) {
            return null;
        }

        return $busca;
    }

    /**
     * Retorna uma nova instancia da classe solicitada em forma de array com todos os resultados da busca
     * @return array
     */
    public function buscaCompleta(): array
    {
        self::$instancia = static::class;

        return app()->banco->leitura()->fetchAll(\PDO::FETCH_CLASS, self::obtemAInstanciaDaClasseSolicitada());
    }

    /**
     * @param string|null $termos
     * @param string|null $parametros
     * @param string $colunas
     * @return \PDOStatement|null
     */
    public function where(?string $termos = null, ?string $parametros = null, string $colunas = '*'): ?\PDOStatement
    {
        self::$instancia = static::class;

        return app()->banco->leitura($termos, $parametros, $colunas);
    }

    /**
     * @param string $termos
     * @param string|null $parametros
     * @return boolean
     */
    public function excluir(string $termos, ?string $parametros = null): bool
    {
        self::$instancia = static::class;

        return app()->banco->excluir($termos, $parametros);
    }

    public static function obtemAInstanciaDaClasseSolicitada()
    {
        return self::$instancia;
    }

    public static function obtemONomeDaTabela(): string
    {
        return strtolower(self::$entidade);
    }

    /**
     * @return array|null
     */
    protected function estaSeguro(): ?array
    {
        $seguro = (array)$this->dados;
        foreach ($this->camposProtegidos as $unset) {
            unset($seguro[$unset]);
        }
        return $seguro;
    }

    /**
     * @param array $dados
     * @return array|null
     */
    protected function filtro(array $dados): ?array
    {
        $filtro = [];
        foreach ($dados as $chave => $valor) {
            $filtro[$chave] = (is_null($valor) ? null : filter_var($valor, FILTER_DEFAULT));
        }
        return $filtro;
    }

    /**
     * @return boolean
     */
    protected function camposObrigatorios(): bool
    {
        $dados = (array)$this->dados();
        foreach ($this->camposObrigatorios as $campo) {
            if (empty($dados[$campo])) {
                return false;
            }
        }
        return true;
    }
}
