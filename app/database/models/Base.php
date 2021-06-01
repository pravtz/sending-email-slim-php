<?php

namespace App\database\models;

use App\database\Connection;
use App\traits\CreateCrud;
use App\traits\DeleteCrud;
use App\traits\ReadCrud;
use App\traits\UpdateCrud;
use PDOException;

abstract class Base
{
    private $instaceConn;
    private $instaceErr;

    public function __construct()
    {

        $this->instaceConn = Connection::getConnect();
        if (!$this->instaceConn) {
            $this->instaceErr = Connection::getError();
            echo "<pre>";
            var_dump($this->instaceErr );
            die();
        }
    }

    use ReadCrud;
    use CreateCrud;
    use UpdateCrud;
    use DeleteCrud;
}
