<?php

namespace App\controllers\api\v1;

use App\controllers\Base;
use App\database\models\User;

class UsersApi extends Base
{
    private $user;

    function __construct()
    {
        $this->user = new User;
    }


    public function list($request, $response)
    {
        $user = $this->user;
        $users = $user->findAll();

        $payload = json_encode(["users" => $users]);
        $response->getBody()->write($payload);

        return $response->withHeader('Content-type', 'application/json', 200);
    }
}
