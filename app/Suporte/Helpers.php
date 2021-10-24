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

if (! function_exists('valida_email')) {
    function valida_email(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
