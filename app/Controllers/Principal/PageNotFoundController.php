<?php
namespace App\Controllers\Principal;

use App\Core\Controller;

class PageNotFoundController extends Controller
{
    public function index()
    {
        $data['title'] = 'Page not found';
        $this->load("principal/pages/not-found/index", $data);
    }
}
