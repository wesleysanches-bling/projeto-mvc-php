<?php

namespace App\Controllers\Principal;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data["title"] = "Projeto MVC";
        $data["mensagem"] = "funcional";
        $this->load("principal/pages/home/home", $data);
    }
}
