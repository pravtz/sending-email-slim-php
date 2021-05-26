<?php

require '../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 1));
$dotenv->load();

require '../app/helpers/config.php';
require '../app/routes/site.php';

$app->run();