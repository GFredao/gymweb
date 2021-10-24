<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Views\View;

class AccountController extends Controller
{
    public function index(): void
    {
        echo View::make('signup');
    }

    public function signin(): void
    {
        echo View::make('signin');
    }

    public function signup(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            if ($_POST) {
                $dados = [
                    'nomeCompleto' => (isset($_POST['nomeCompleto'])) ? $_POST['nomeCompleto'] : '',
                    'emailCadastro' => (isset($_POST['emailCadastro'])) ? $_POST['emailCadastro'] : '',
                    'senhaCadastro' => (isset($_POST['senhaCadastro'])) ? $_POST['senhaCadastro'] : ''
                ];

                $this->cliente->cadastro($dados['nomeCompleto'], $dados['emailCadastro'], $dados['senhaCadastro']);
                $this->cliente->salvar();
                unset($_POST);
            }
        }

        echo View::make('signup');
    }
}
