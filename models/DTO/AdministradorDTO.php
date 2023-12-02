<?php
class AdministradorDTO
{

    public $id_admin;
    /**
     * Summary of password
     * @var 
     */
    public $username;
    /**
     * Summary of email
     * @var 
     */
    public $password;
    /**
     * Summary of email
     * @var 
     */
    public function __construct($id_admin, $username, $password)
    {
        $this->id_admin = $id_admin;
        $this->username = $username;
        $this->password = $password;
    }
}