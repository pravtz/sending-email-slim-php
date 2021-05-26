<?php

namespace App\traits;

use Slim\Views\Twig;
use Exception;

trait BaseViews
{
    public function getTwig()
    {
        try {
            return Twig::create(DIR_VIEWS);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
    public function setTwig($name)
    {
        return $name . EXT_VIEWS;
    }
}
