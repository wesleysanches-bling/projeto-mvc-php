<?php

namespace App\Controllers;

use App\Core\Controller;

class VueAppController extends Controller
{
    public function index()
    {
        $this->load("vue-app/index", [], '');
    }
}
