<?php

declare(strict_types=1);

namespace App\Models;

class Cliente extends Model
{
    public function __construct()
    {
        parent::__construct('pessoas', ['id'], ['nome_completo', 'email', 'senha']);
    }

    public function cadastro(string $nomeCompleto, string $email, string $senha): self
    {
        $this->nome_completo = $nomeCompleto;
        $this->email = $email;
        $this->senha = $senha;

        return $this;
    }

    public function buscaPorEmail(string $email, string $colunas = '*')
    {
        $busca = $this->where("email = :email", "email = $email", $colunas);
        if (! $busca) {
            return null;
        }

        return $busca->fetchObject(__CLASS__);
    }

    public function salvar(): bool
    {
        if (! $this->camposObrigatorios()) {
            echo 'Nome Completo, email e senha são obrigatórios';
            return false;
        }

        # Se o usuário já existe, atualize os dados.
        if (! empty($this->id)) {
            $idCliente = (int)$this->id;

            $busca = $this->where("email = :email and id != :id", "email = $this->email & id = $idCliente", 'id');
            if ($busca->fetchObject(__CLASS__)) {
                echo 'O E-MAIL INFORMADO JÁ ESTÁ CADASTRADO, TENTE USAR OUTRO.';
                return false;
            }

            $this->atualizar($this->estaSeguro(), "id = :id", "id = $idCliente");
            if ($this->falha()) {
                echo 'Erro ao atualizar o registro. Tente novamente mais tarde';
            }
        }

        # Se o usuário não existe, efetue o cadastro.
        if (empty($this->id)) {
            if ($this->buscaPorEmail($this->email, 'id')) {
                echo 'O email informado já está cadastrado';
                return false;
            }

            $idCliente = $this->criar($this->estaSeguro());

            if ($this->falha()) {
                echo 'Erro ao efetuar cadastro.';
                return false;
            }
        }

        $this->dados = ($this->buscaPorId($idCliente))->dados();
        return true;
    }
}
