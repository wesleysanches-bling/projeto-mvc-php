<?php
namespace App\Controllers\Principal;

use App\Core\Controller;

class MaintenanceController extends Controller
{
    public function index()
    {
        $data['title'] = 'Em manutenção';
        $this->load("principal/pages/maintenance/index", $data);
    }
}
