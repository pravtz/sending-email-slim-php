<?php


namespace App\controllers;


class RegisterController extends Base
{
    public function singIn($request, $response)
    {

        return $this->getTwig()->render($response, $this->setTwig('/page/login'), [
            'nameProject' => NAME_PROJECT
        ]);
    }
    public  function logOut($request, $response)
    {
    }

    public function singUp($request, $response)
    {

        return $this->getTwig()->render($response, $this->setTwig('/page/register'), [
            'nameProject' => NAME_PROJECT
        ]);
    }
}
