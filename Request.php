<?php

class Request
{
    public $firstname;
    public $lastname;

    public function GetOrPost()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            echo("That was a POST request"."<br>");
            echo print_r($_POST)."<br>";
        }
        else
        {
            echo ("That was a GET request"."<br>");
            echo print_r($_GET)."<br>";
        }
    }

    public function RequestedURI()
    {
        echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."<br>";
    }

    public function RequestParametrs()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') 
        {
            $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_components = parse_url($url);
            parse_str($url_components['query'], $params);
            echo ('Firstname: ' . $params['firstname'] . ' Lastname: ' . $params['lastname']);
        }
        else
        {
            echo ($_POST['firstname'].'  '.$_POST['lastname']);
        }
    }
}

?>