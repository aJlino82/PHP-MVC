<?php

require "Model/SysUserModel.php";


class SysHomeController
{

    public function App()
    {
        include "View/App.php";
    }

    public function Login()
    {
        include "View/Login.php";
    }

    public function Panel()
    {

        $modelo = new SysUserModel();
        $user = $modelo->UserLogged();
        include "View/Panel.php";
    }
}
