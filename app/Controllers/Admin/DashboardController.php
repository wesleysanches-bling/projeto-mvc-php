<?php

namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Middleware\AuthMiddleware;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware([new AuthMiddleware(), 'handle']);
    }

    public function index()
    {
        $dados["title"] = "Dashboard";
        $view = "admin/pages/dashboard/index";
        $this->load($view, $dados);
    }
}
