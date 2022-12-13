<?php

class Request
{
    public function GetOrPost()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            echo("That was a POST request");
        }
        else
        {
            echo ("That was a GET request");
        }
    }
}

?>