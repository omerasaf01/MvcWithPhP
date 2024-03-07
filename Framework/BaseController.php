<?php

require_once "vendor/autoload.php";

class BaseController {
    public $loader;
    public $twig;

    function __construct()
    {
        $this->loader = new Twig\Loader\FilesystemLoader("Views");
        $this->twig = new Twig\Environment($this->loader);
    }

    function getTwig() {
        return $this->twig;
    }

    protected function render(?string $view, ?array $datas) {
        echo $this->twig->render($view ?? "index.html", $datas);
    }
}

?>