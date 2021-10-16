<?php

declare(strict_types=1);

namespace App\Core;

use App\Exceptions\ControllerNotFoundException;
use App\Exceptions\MethodNotFoundException;
use App\Exceptions\ViewNotFoundException;

class Core
{
    protected $currentController = 'pages';

    protected $currentMethod = 'index';

    protected array $parametros = [];

    /**
     * @throws ControllerNotFoundException
     * @throws MethodNotFoundException
     * @throws ViewNotFoundException
     * @return void
     */
    public function resolve()
    {
        $url = $this->parseUrl();
        
        if (! isset($url)) {
            $classeController = NAMESPACE_CONTROLLER . ucwords($this->currentController) . 'Controller';
            $this->currentController = new $classeController();

            $callback = [$this->currentController, $this->currentMethod];

            if (is_callable($callback)) {
                return call_user_func_array($callback, $this->parametros);
            }
        }

        if (! empty($url)) {
            $controller = CAMINHO_CONTROLLER . ucwords($url[0] . 'Controller.php');

            if (! file_exists($controller)) {
                throw new ControllerNotFoundException();
            }

            $this->currentController = $url[0];
            unset($url[0]);
        }

        $classeController = NAMESPACE_CONTROLLER . ucwords($this->currentController) . 'Controller';
        $this->currentController = new $classeController();

        if (isset($url[1]) && ! empty($url[1])) {
            if (! method_exists($this->currentController, $url[1])) {
                throw new MethodNotFoundException();
            }

            $this->currentMethod = $url[1];
            unset($url[1]);
        }

        $this->parametros = (isset($url) ? $url : []);

        $callback = [$this->currentController, $this->currentMethod];

        if (is_callable($callback)) {
            return call_user_func_array($callback, $this->parametros);
        }
    }

    /**
     * @return array|null
     */
    private function parseUrl(): ?array
    {
        if (! isset($_GET['url'])) {
            return null;
        }

        return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    }
}
