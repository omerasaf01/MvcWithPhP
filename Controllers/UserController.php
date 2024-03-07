<?php

require_once "vendor/autoload.php";
require_once "Framework/BaseController.php";

class UserController extends BaseController
{
    public function Main()
    {
        $controller = new self();
        $twig = $controller->getTwig();

        $this->render("index.twig", array(
            "name" => "Ömer Asaf",
            "surname" => "Karasu",
            "age" => 17,
            "url" => $_SERVER["REQUEST_URI"]
        ));
    }
}

$controller = new UserController();
$controller->Main();
