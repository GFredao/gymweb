<?php

declare(strict_types=1);

namespace App\Core;

class Application
{
    protected Core $core;

    public function __construct()
    {
        $this->core = new Core();
    }

    public function run()
    {
        $this->core->resolve();
    }
}
