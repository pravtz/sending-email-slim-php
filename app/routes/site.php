<?php

use \app\controllers\Welcome;
use \app\controllers\RegisterController;

$app->get('/', Welcome::class.":index");
$app->get('/login', RegisterController::class.":singIn");