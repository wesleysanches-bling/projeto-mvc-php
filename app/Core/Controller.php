<?php

namespace App\Core;

use App\Supports\Traits\LoadViewTwig;
use App\Supports\SupportsCripto\Cripto;
use App\Supports\Traits\HttpRequestResponseTrait;

class Controller
{
    use Cripto;
    use LoadViewTwig;
    use HttpRequestResponseTrait;
}