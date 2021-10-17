<?php

declare(strict_types=1);

namespace App\Models;

abstract class Model
{
    protected static $instancia;

    protected static $entidade;

    protected array $camposProtegidos;

    protected array $camposObrigatorios;

    public function __construct(string $entidade, array $camposProtegidos, array $camposObrigatorios)
    {
        self::$entidade = $entidade;
        $this->camposProtegidos = array_merge($camposProtegidos, ['data_cadastro', 'data_atualizacao']);
        $this->camposObrigatorios = $camposProtegidos;
    }

    /**
     * Retorna uma nova instancia da classe solicitada em forma de array com todos os resultados da busca
     * @return array
     */
    public static function leTudo(): array
    {
        self::$instancia = static::class;

        return app()->banco->leitura()->fetchAll(\PDO::FETCH_CLASS, self::obtemAInstanciaDaClasseSolicitada());
    }
    
    public function where(?string $termos = null, ?string $parametros = null, string $colunas = '*'): ?\PDOStatement
    {
        self::$instancia = static::class;

        return app()->banco->leitura($termos, $parametros, $colunas);
    }

    public static function obtemAInstanciaDaClasseSolicitada()
    {
        return self::$instancia;
    }

    public static function obtemONomeDaTabela(): string
    {
        return strtolower(self::$entidade);
    }
}
