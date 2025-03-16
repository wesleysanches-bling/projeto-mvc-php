<?php

namespace App\Controllers\Principal;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $dados["title"] = "Home - MeuDelivery";
        $dados["mensagem"] = "funcional";
        $view = "principal/pages/home/home";
        $this->load($view, $dados);
    }
}
