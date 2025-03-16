<?php 

namespace App\Supports\Traits;


trait LoadViewTwig
{
	protected function load(string $viewName, $params = array())
    {
        $twig = new \Twig\Environment(new \Twig\Loader\FilesystemLoader("resources/views/"));
        $twig->addGlobal('URL_BASE', URL_BASE);
        echo $twig->render($viewName . '.twig', $params);
    }
}
