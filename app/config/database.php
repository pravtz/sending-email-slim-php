<?php


define('CONNECTION', [
    "driver" => $_ENV['DB_DRIVE'],
    "host" => $_ENV['DB_HOST'],
    "port" => $_ENV['DB_PORT'],
    "dbname" => $_ENV['DB_DATABASE'],
    "username" => $_ENV['DB_USERNAME'],
    "passwd" => $_ENV['DB_PASSWORD'],
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",

        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,

        PDO::ATTR_CASE => PDO::CASE_NATURAL

    ]
]);
