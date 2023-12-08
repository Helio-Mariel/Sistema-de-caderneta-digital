<?php

class AdministradorController extends RenderViews
{
    private $administradorDAO;

    public function __construct()
    {
        $this->administradorDAO = new AdministradorDAO();
    }

    public function admin()
    {
        $this->loadView('views_admin/admin_home', []);
    }

    /*   public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $this->administradorDAO->login_admin($username, $password);
    }   */

    public function logout()
    {
        $this->administradorDAO->logout();
    }
}
