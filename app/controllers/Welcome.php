<?php

namespace App\controllers;

use App\database\models\User;

class Welcome extends Base
{
    public function index($request, $response)
    {
        $user = new User;

        $users = $user->findAll();


        return $this->getTwig()->render($response, $this->setTwig('/page/welcome'), [
            'nameProject' => NAME_PROJECT
        ]);
    }
}
