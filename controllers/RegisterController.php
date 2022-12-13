<?php
use models\RegisterModel;

require('Portfolio/models/RegisterModel.php');

class RegisterController
{
    public function Register()
    {
        $action = 'Register';
        require 'Portfolio/views/Register.phtml';
    }

    public function UserRegistrated()
    {
        $model = new RegisterModel($_POST['FirstName'], $_POST['LastName'], $_POST['Email']);
        $model->Register();
        $RegisterOutput = $model->getRegisterOutput();
        require('Portfolio/views/RegisterOutput.phtml');
    }
}

?>