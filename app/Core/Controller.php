<?php

namespace App\Core;

use App\Supports\Traits\LoadViewTwig;
use App\Supports\SupportsCripto\Cripto;
use App\Supports\Traits\HttpResponseTrait;

class Controller
{
    use Cripto;
    use LoadViewTwig;
    use HttpResponseTrait;
}