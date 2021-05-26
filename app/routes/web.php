<?php

use \App\controllers\Welcome;
use \App\controllers\RegisterController;
use App\controllers\UserController;

$app->get('/', Welcome::class . ":index");
$app->get('/login', RegisterController::class . ":singIn");

$app->get('/admin/users', UserController::class . ":index");
$app->get('/admin/users/create', UserController::class . ":create");
$app->post('/admin/users', UserController::class . ":store");
$app->get('/admin/users/{id}', UserController::class . ":show");
$app->get('/admin/users/edit/{id}', UserController::class . ":edit");
$app->put('/admin/users/{id}', UserController::class . ":update");
$app->delete('/admin/users/{id}', UserController::class . ":destroy");
