<?php

namespace App\database;

use PDO;
use PDOException;


class Connection
{
    private static $instanceConnection;
    private static $errorConnection;

    public static function getConnect(): ?PDO
    {
        if (empty(self::$instanceConnection)) {
            try {
                self::$instanceConnection = new PDO(
                    CONNECTION["driver"] . ":host=" . CONNECTION["host"] . ";dbname=" . CONNECTION["dbname"] . ";port=" . CONNECTION["port"],
                    CONNECTION["username"],
                    CONNECTION["passwd"],
                    CONNECTION["options"]
                );
            } catch (PDOException $exception) {
                self::$errorConnection = $exception;
            }
        }
        return self::$instanceConnection;
    }
    public static function getError(): ?PDOException
    {
        return self::$errorConnection;
    }
}
