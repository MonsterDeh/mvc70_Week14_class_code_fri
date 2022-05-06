<?php

use App\Controllers\TestController;

require_once "vendor/autoload.php";

$app = new Core\Application();

$app->get('/home', [TestController::class, 'index']);

$app->get('/', function () {
    echo "it is /";
});


$app->run();