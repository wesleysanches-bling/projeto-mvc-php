<?php 

namespace App\Middleware;
use App\Core\Middleware;

class AuthMiddleware extends Middleware
{
    public function handle()
    {
        if (!isset($_SESSION['authenticated']) || !isset($_SESSION['username'])) {
            header('Location: /');
            exit();
        }
    }
}