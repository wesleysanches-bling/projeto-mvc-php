<?php 

namespace App\Supports\Traits;


trait LoadView
{
	protected function load(string $view, array $data = array(), string $template = 'principal')
    {
        extract($data);

        ob_start();

        include_once 'resources/views/' . $view . '.php';

         $content = ob_get_clean();

         include_once 'resources/views/' . $template . '/tema/template.php';
    }
}
