<?php

namespace App\Core;

use App\Supports\Traits\LoadView;
use App\Supports\SupportsCripto\Cripto;
use App\Supports\Traits\HttpRequestResponseTrait;

class Controller
{
    use Cripto;
    use LoadView;
    use HttpRequestResponseTrait;

    protected function middleware($middleware)
    {
        if (is_callable($middleware)) {
            $middleware();
        }
    }
}