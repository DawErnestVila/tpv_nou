<?php

class mainController extends Controller
{
    function home()
    {
        echo "Welcome to the TPV Home Page!";
        // $params = array(
        //     "title" => "Home",
        // );
        // $this->render("main/home", $params, "site");
    }

    function err404()
    {
        // $params = array(
        //     "title" => "Error 404",
        // );
        // $this->render("main/err404", $params, "site");
        echo "Error 404: Page not found.";
    }
}
