<?php

namespace App\controllers;

use App\database\models\User;

class Welcome extends Base
{
    public function index($request, $response)
    {
        

        return $this->getTwig()->render($response, $this->setTwig('/page/welcome'), [
            'nameProject' => "Meu Projeto"
        ]);
    }
}
