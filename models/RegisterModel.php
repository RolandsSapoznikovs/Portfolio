<?php
    class Request
    {
        public $Firstname;
        public $LastName;
        public $Email;

        function __construct($Firstname, $LastName, $Email)
        {
            $this->Firstname = $Firstname;
            $this->LastName = $LastName;
            $this->Email = $Email;
        }
    }
?>