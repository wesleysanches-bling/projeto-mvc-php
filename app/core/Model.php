<?php

namespace app\core;

use app\classes\supports_apirequest\PullApi;
use app\classes\supports_validation\Validation;
use app\classes\supports_session\DataSession;
use app\classes\supports_cripto\Cripto;


abstract class Model
{
    use Cripto;
    protected $db;
    public function __construct()
    {
        $opcoes = array(
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::MYSQL_ATTR_INIT_COMMAND => "Set NAMES utf8"
        );
        $this->db = new \PDO("mysql:dbname=" . BANCO . ";host=" . SERVIDOR, USUARIO, SENHA, $opcoes);
    }

    protected function pullApi($data, string $url)
    {
        $apiRequest = new PullApi();
        return $apiRequest->pullApi($data, $url);
    }
}
