<?php
class Router
{

    private $controller;
    private $method;

    public function __construct()
    {
        $this->matchRoute();
    }

    public function matchRoute()
    {
        $rutes = array(
            "/home",
            "main/home",
            "tpv/home",
        );



        $url = explode('/', URL);

        $this->controller = !empty($url[1]) ? $url[1] : 'main';
        $this->controller = $this->controller . 'Controller';
        $this->method = !empty($url[2]) ? $url[2] : 'home';

        $trobat = false;
        foreach ($rutes as $ruta) {

            if ($ruta == $url[1] . "/" . $this->method) {
                require_once(__DIR__ . "/Controllers/" . $this->controller . ".php");
                $trobat = true;
                break;
            }
        }
        if (!$trobat) {
            echo "Error 404: Page not found.";
            $this->controller = 'tpvController';
            $this->method = 'err404';
            require_once("App/Controllers/" . $this->controller . ".php");
        }
    }

    public function run()
    {
        $controller = new $this->controller();
        $method = $this->method;
        $controller->$method();
    }
}
