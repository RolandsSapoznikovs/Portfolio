<?php

class Request
{
    public function GetOrPost()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            echo("That was a POST request"."<br>");
            print_r($_POST)."<br>";
        }
        else
        {
            echo ("That was a GET request"."<br>");
            print_r($_GET)."<br>";
        }
    }

    public function RequestedURI()
    {
        echo ($_SERVER["PHP_SELF"])."<br>";
    }
}

?>