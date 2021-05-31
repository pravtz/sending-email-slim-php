<?php

use App\controllers\api\v1\UsersApi;
use Slim\Routing\RouteCollectorProxy;

$app->group('/api/v1', function (RouteCollectorProxy $group) {
    $group->get('/users', UsersApi::class . ":list");
});
