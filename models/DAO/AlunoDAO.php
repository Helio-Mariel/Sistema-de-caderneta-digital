<?php
session_start();

class AlunoDAO extends Database
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->getConnection();
    }


    public function fetch()
    {
        $stm = $this->pdo->query("SELECT * FROM aluno");
        if ($stm->rowCount() > 0) {
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }

    public function login($username, $password)
    {
        $stm = $this->pdo->prepare("SELECT * FROM aluno WHERE username = :username");
        $stm->bindParam(":username", $username);
        $stm->execute();

        $aluno = $stm->fetch(PDO::FETCH_ASSOC);

        if ($aluno && $password == $aluno['password']) {
            $_SESSION['id_aluno'] = $aluno['id_aluno'];
            header("Location: /app/aluno_home");
        } else {
            header("Location: /app/login");
            return false;
        }
    }

    public function getUser()
    {
        $id = $_SESSION['id_aluno'];
        $stm = $this->pdo->prepare('SELECT * from aluno where id_aluno = ?');
        $stm->execute([$id]);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }
    public function fetchById() // perfil 
    {
        $id = $_SESSION['id_aluno'];
        $user = $this->getUser();

        $stm = $this->pdo->prepare("SELECT 
aluno.id_aluno, aluno.nome as aluno_nome, aluno.tipo_aluno, curso.nome as curso_nome, 
turma.nome as turma_nome, classe.numeracao as classe_numeracao from aluno 
join curso  on curso.id_curso = :curso
join turma  on turma.id_turma = :turma
join classe on classe.id_classe = :classe
where aluno.id_aluno = :id_aluno ;");

        $stm->bindParam(':id_aluno', $user['id_aluno']);
        $stm->bindParam(':turma', $user['id_turma']);
        $stm->bindParam(':curso', $user['id_curso']);
        $stm->bindParam(':classe', $user['id_classe']);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function disciplinasById()
    {
        $id = $_SESSION['id_aluno'];
        $user = $this->getUser();

        $stm = $this->pdo->prepare("SELECT 
professor.nome as prof_nome, 
disciplina.nome as disc_nome
from prof_disciplina_classe_curso_turma1 as pf
join professor on pf.id_professor = professor.id_professor
join turma on pf.id_turma = turma.id_turma
join disciplina_curso_classe on pf.iddisciplina_curso_classe = 
disciplina_curso_classe.iddisciplina__
join disciplina on disciplina.id_disciplina = disciplina_curso_classe.id_disciplina; ");
        $stm->bindParam(':id_aluno', $user['id_aluno']);
        $stm->bindParam(':turma', $user['id_professor']);
        $stm->bindParam(':curso', $user['id_turma']);
        $stm->bindParam(':classe', $user['iddisciplina_curso_classe']);
        $stm->bindParam(':classe', $user['id_classe']);
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
