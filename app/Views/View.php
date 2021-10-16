<?php

declare(strict_types=1);

namespace App\Views;

use App\Exceptions\ViewNotFoundException;

class View
{
    protected string $view;

    protected array $parametros = [];

    public function __construct(string $view, array $parametros = [])
    {
        $this->view = $view;
        $this->parametros = $parametros;
    }

    public static function make(string $view, array $parametros = []): self
    {
        return new static($view, $parametros);
    }

    private function render(): string
    {
        $view = CAMINHO_VIEW . $this->view . '.php';

        if (! file_exists($view)) {
            throw new ViewNotFoundException();
        }

        extract($this->parametros);

        ob_start();

        include $view;

        return ob_get_clean();
    }

    public function __toString(): string
    {
        return $this->render();
    }

    public function __get($name)
    {
        return $this->parametros[$name] ?? null;
    }
}
