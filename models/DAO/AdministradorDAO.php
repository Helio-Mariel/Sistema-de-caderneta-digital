<?php
session_start();

class AdministradorDAO extends Database
{
    private $pdo;
    //private $userId;


    public function __construct()
    {
        $this->pdo = $this->getConnection();
        //    $this->userId = $_SESSION['user_id'];
    }


    public function getAdmin()
    {
        $id = $_SESSION['id_admin'];
        $stm = $this->pdo->prepare('SELECT * from administrador where id_admin = ?');
        $stm->execute([$id]);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function login_admin($username, $password)
    {
        $stm = $this->pdo->prepare("SELECT * FROM administrador WHERE username = :username");
        $stm->bindParam(":username", $username);
        $stm->execute();

        $admin = $stm->fetch(PDO::FETCH_ASSOC);

        if ($admin && $password == $admin['password']) {
            $_SESSION['id_admin'] = $admin['id_admin'];
            header("Location: /app/admin_home");
        } else {
            header("Location: /app/login");
            return false;
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location: /app/");
    }
}
