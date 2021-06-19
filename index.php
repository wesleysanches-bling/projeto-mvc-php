<?php
date_default_timezone_set('America/Belem');
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
header("Cache-Control: no-cache, must-revalidate");

session_start();
require_once __DIR__."/app/util/util.php";
require_once __DIR__."/config/config.php";
require_once __DIR__."/app/core/Core.php";
require_once __DIR__."/vendor/autoload.php";

$core = new Core;
$core->run();