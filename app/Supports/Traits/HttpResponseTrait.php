<?php

namespace App\Supports\Traits;

ob_start();

trait HttpResponseTrait
{
    protected function validateRequestMethods(array $expectedMethods)
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        if (!in_array($requestMethod, $expectedMethods)) {
            return $this->jsonResponse('erro', [], "Método inválido. Esperado um dos: " . implode(", ", $expectedMethods), 405);
        }
    }

    protected function jsonResponse($status, $data = [], $message = "", $httpCode = 200)
    {
        ob_clean();

        http_response_code($httpCode);

        header('Content-Type: application/json');
        
        $response = [
            'status' => $status,
            'message' => $message,
            'data' => $data
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        
        exit;
    }
}
