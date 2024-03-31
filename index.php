<?php 

require "vendor/autoload.php";

if (file_exists("Controllers/" . $_SERVER["REQUEST_URI"] . "Controller.php")) {
    require "Controllers/" . $_SERVER["REQUEST_URI"] . "Controller.php";
} else {
    require "Controllers/DefaultController.php";
}
