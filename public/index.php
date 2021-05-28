<?php

require '../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 1));
$dotenv->load();

require '../app/config/views.php';
require '../app/config/database.php';
require '../app/routes/web.php';


$app->run();
