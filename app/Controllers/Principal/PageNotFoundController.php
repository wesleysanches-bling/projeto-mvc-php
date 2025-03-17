<?php
namespace App\Controllers\Principal;

use App\Core\Controller;

class PageNotFoundController extends Controller
{
    public function index()
    {
        $data          = [];
        $data['title'] = 'Page not found';
        $view           = "principal/pages/not-found/index";
        $this->load($view, $data);
    }
}
