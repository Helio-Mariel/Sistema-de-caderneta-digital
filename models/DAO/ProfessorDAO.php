<?php
session_start();

class ProfessorDAO extends Database
{
    private $pdo;
    //private $userId;

    public function __construct()
    {
        $this->pdo = $this->getConnection();
        //    $this->userId = $_SESSION['user_id'];
    }


    public function fetch()
    {
        $stm = $this->pdo->query("SELECT * FROM professor");
        if ($stm->rowCount() > 0) {
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }

    public function login_prof($email, $password)
    {
        $stm = $this->pdo->prepare("SELECT * FROM professor WHERE email = :email");
        $stm->bindParam(":email", $email);
        $stm->execute();

        $prof = $stm->fetch(PDO::FETCH_ASSOC);

        if ($prof && $password == $prof['password']) {
            $_SESSION['id_professor'] = $prof['id_professor'];
            header("Location: /app/prof_home");
        } else {
            header("Location: /app/login2");
            return false;
        }
    }

    public function getProf()
    {
        $id = $_SESSION['id_professor'];
        $stm = $this->pdo->prepare('SELECT * from professor where id_professor = ?');
        $stm->execute([$id]);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }
    public function fetchById() // perfil  
    {
        $id = $_SESSION['id_professor'];
        $user = $this->getProf();

        $stm = $this->pdo->prepare("SELECT prof_turma.id_prof_, professor.nome as prof_nome, turma.nome as turma_nome, 
curso.nome as curso_nome, classe.numeracao as classe_nome
from prof_turma
join professor on professor.id_professor =  :id_professor
join turma on  turma.id_turma = :turma
join curso on curso.id_curso =  :curso
join classe on classe.id_classe =  :classe
where professor.id_professor =  :id_professor    ");


        $stm->bindParam(':id_professor', $user['id_professor']);
        $stm->bindParam(':turma', $user['id_turma']);
        $stm->bindParam(':curso', $user['id_curso']);
        $stm->bindParam(':classe', $user['id_classe']);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function logout()
    {
        session_destroy();
        header("Location: /app/");
    }
}

// teste