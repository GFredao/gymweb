<?php

use App\Core\Application;

if (! function_exists('app')) {
    function app(): Application
    {
        static $instance = null;

        if (! $instance) {
            $instance = new Application();
        }

        return $instance;
    }
}
