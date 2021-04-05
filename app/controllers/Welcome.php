<?php

namespace app\controllers;

class Welcome extends Base
{
    public function index($request, $response){

        return $this->getTwig()->render($response, $this->setTwig('/page/welcome'));
    }
}