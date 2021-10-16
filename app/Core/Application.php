<?php

declare(strict_types=1);

namespace App\Core;

use App\Banco\Banco;
use App\Suporte\Message;

class Application
{
    protected Banco $banco;

    protected Core $core;

    protected Message $mensagem;

    public function __construct()
    {
        $this->banco = new Banco();
        $this->core = new Core();
        $this->mensagem = new Message();
    }

    public function run()
    {
        $this->core->resolve();
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }
}
