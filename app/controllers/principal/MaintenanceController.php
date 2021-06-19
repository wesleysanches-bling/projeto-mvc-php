<?php
namespace app\controllers\principal;
use app\core\Controller;

class MaintenanceController extends Controller
{
    public function index()
    {
        $dados          = [];
        $view           = "principal/pages/maintenance/index";
        $this->load($view, $dados);
    }
}
