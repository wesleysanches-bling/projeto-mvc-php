<?php 

namespace App\Middleware;
use App\Core\Controller;

class AuthApiMiddleware extends Controller
{
    public function handle()
    {
        if (!isset($_SESSION['authenticated']) || !isset($_SESSION['username'])) {
            return $this->jsonResponse([], "Operação não permitida", 401);
        }
    }
}