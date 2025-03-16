<?php

namespace App\Core;

use App\Supports\SupportsCripto\Cripto;

class Controller
{
    use Cripto;

    protected function load(string $viewName, $params = array())
    {
        $twig = new \Twig\Environment(new \Twig\Loader\FilesystemLoader("resources/views/"));
        $twig->addGlobal('URL_BASE', URL_BASE);
        echo $twig->render($viewName . '.twig', $params);
    }
}
