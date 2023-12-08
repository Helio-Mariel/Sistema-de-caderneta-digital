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
    public function fetchById()
    {
        $id = $_SESSION['id_professor'];

        $stm = $this->pdo->prepare("SELECT prof_turma.id_professor , professor.nome as prof_nome, turma.nome as turma_nome, 
curso.nome as curso_nome, classe.numeracao as classe_nome
from prof_turma
join professor on professor.id_professor = prof_turma.id_professor
join turma on  turma.id_turma = prof_turma.id_turma
join curso on curso.id_curso = prof_turma.id_curso
join classe on classe.id_classe = prof_turma.id_classe
where professor.id_professor = $id ");

        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function disciplinasById()
    {
        $id = $_SESSION['id_professor'];

        $stm = $this->pdo->prepare("SELECT 
prof_turma.id_professor , disciplina.nome as disciplina_nome , turma.nome as turma_nome, 
curso.nome as curso_nome, classe.numeracao as classe_nome 
from prof_turma 
join disciplina on prof_turma.id_disciplina = disciplina.id_disciplina
join professor on prof_turma.id_professor = professor.id_professor 
join turma on prof_turma.id_turma = turma.id_turma 
join curso on prof_turma.id_curso = curso.id_curso 
join classe on prof_turma.id_classe = classe.id_classe 
where professor.id_professor = $id ");

        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function disciplinasById1()
    {
        $id = $_SESSION['id_professor'];

        $stm = $this->pdo->prepare("SELECT 
prof_turma.id_professor , disciplina.nome as disciplina_nome , turma.nome as turma_nome, 
curso.nome as curso_nome, classe.numeracao as classe_nome 
from prof_turma 
join disciplina on prof_turma.id_disciplina = disciplina.id_disciplina
join professor on prof_turma.id_professor = professor.id_professor 
join turma on prof_turma.id_turma = turma.id_turma 
join curso on prof_turma.id_curso = curso.id_curso 
join classe on prof_turma.id_classe = classe.id_classe 
where professor.id_professor = $id ");

        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listar_Classes()
    {
        $id = $_SESSION['id_professor'];

        $stm = $this->pdo->prepare("SELECT prof_turma.id_professor, classe.numeracao as classe_nome 
from prof_turma
join professor on prof_turma.id_professor = professor.id_professor 
join classe on prof_turma.id_classe = classe.id_classe 
where professor.id_professor = $id ");

        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listar_Cursos()
    {
        $id = $_SESSION['id_professor'];

        $stm = $this->pdo->prepare("SELECT prof_turma.id_professor, curso.nome as curso_nome
from prof_turma 
join professor on prof_turma.id_professor = professor.id_professor 
join curso on prof_turma.id_curso = curso.id_curso 
where professor.id_professor = $id  ");

        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listar_Turmas()
    {
        $id = $_SESSION['id_professor'];

        $stm = $this->pdo->prepare("SELECT 
prof_turma.id_professor , disciplina.nome as disciplina_nome , turma.nome as turma_nome,
from prof_turma 
join professor on prof_turma.id_professor = professor.id_professor 
join turma on prof_turma.id_turma = turma.id_turma 
where professor.id_professor = $id   ");

        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function logout()
    {
        session_destroy();
        header("Location: /app/");
    }
}
