<?php

use App\App;

require dirname(__DIR__).'/config/config.php';

$app = new App();
$response = $app->run();
echo $response;