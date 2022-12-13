<?php
use models\RegisterModel;

require('C:/laragon/www/Portfolio/models/RegisterModel.php');

class RegisterController
{
    public function Register()
    {
        $action = 'Register';
        require 'C:/laragon/www/Portfolio/views/Register.phtml';
    }

    public function UserRegistrated()
    {
        $model = new RegisterModel($_POST['FirstName'], $_POST['LastName'], $_POST['Email']);
        $model->ReturnData();
        $RegisterOutput = $model->getRegisterOutput();
        require('C:/laragon/www/Portfolio/views/RegisterOutput.phtml');
    }
}

?>