<?php

class Request
{
    public function GetOrPost()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            echo("That was a POST request");
            print_r($_POST);
        }
        else
        {
            echo ("That was a GET request");
            print_r($_GET);
        }
    }

    public function RequestedURI()
    {
        echo ($_SERVER["PHP_SELF"]);
    }
}

?>