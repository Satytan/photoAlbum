<?php

use App\App;
use App\Controller\AlbumController;
use App\Controller\AlbumListController;

require dirname(__DIR__).'/config/config.php';

$app = new App();
$app->addController(new AlbumListController());
$app->addController(new AlbumController());
$response = $app->run($_GET);
echo $response;