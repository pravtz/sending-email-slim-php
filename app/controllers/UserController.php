<?php

namespace App\controllers;

use App\database\models\User;

class UserController extends Base
{
    private $user;

    function __construct()
    {
        $this->user = new User;
    }

    public function index($request, $response)
    {
        $user = $this->user;
        $users = $user->findAll();

        return $this->getTwig()->render($response, $this->setTwig('/page/admin/users'), [
            'nameProject' => NAME_PROJECT,
            'users' => $users,

        ]);
    }
    public function create($request, $response)
    {
        return $this->getTwig()->render($response, $this->setTwig('/page/admin/users/register'), []);
    }

    public function store($request, $response)
    {
        $user = $this->user;

        $created = $user->create(['first_name' => 'ederson', 'lastname' => 'oliveira']);
    }

    public function show($request, $response)
    {
    }
    public function edit($request, $response)
    {
    }
    public function update($request, $response)
    {
    }
    public function destroy($request, $response)
    {
    }
}
