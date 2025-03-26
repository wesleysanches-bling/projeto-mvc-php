<?php 

namespace App\Middleware;

class AuthMiddleware
{
    public function handle()
    {
        if (!isset($_SESSION['authenticated']) || !isset($_SESSION['username'])) {
            header('Location: /');
            exit();
        }
    }
}