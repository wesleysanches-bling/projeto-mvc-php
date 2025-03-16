<?php
namespace App\Controllers\Principal;

use App\Core\Controller;

class MaintenanceController extends Controller
{
    public function index()
    {
        $dados          = [];
        $view           = "principal/pages/maintenance/index";
        $this->load($view, $dados);
    }
}
