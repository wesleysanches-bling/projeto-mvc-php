<?php

namespace app\core;

use app\classes\supports_validation\Validation;
use app\classes\supports_session\DataSession;
use app\classes\supports_libsjs\LibsJs;
use app\classes\supports_session\DataSessionStore;
use app\classes\supports_cripto\Cripto;

class Controller
{
    use libsjs;
    use Cripto;

    protected function load(string $viewName, $params = array())
    {
        $twig = new \Twig\Environment(new \Twig\Loader\FilesystemLoader("app/views/"));
        $twig->addGlobal('URL_BASE', URL_BASE);
        echo $twig->render($viewName . '.twig', $params);
    }
}
