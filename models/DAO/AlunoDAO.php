<?php
session_start();

class AlunoDAO extends Database
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->getConnection();
    }


    public function login($n_matricula, $password)
    {
        $stm = $this->pdo->prepare("SELECT * FROM aluno WHERE n_matricula = :n_matricula");
        $stm->bindParam(":n_matricula", $n_matricula);
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
        $user = $this->getUser();
        $stm = $this->pdo->prepare("SELECT 
        aluno.id_aluno, aluno.n_matricula, aluno.nome as aluno_nome, aluno.tipo_aluno, curso.nome as curso_nome, 
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
        $user = $this->getUser();
        $id_turma = $user['id_turma'];
        $stm = $this->pdo->prepare("SELECT professor.nome as prof_nome, disciplina.nome as disciplina_nome, prof_turma.dia 
        from prof_turma
        join professor on prof_turma.id_professor =  professor.id_professor
        join disciplina on prof_turma.id_disciplina = disciplina.id_disciplina
        where prof_turma.id_turma = $id_turma");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function notasById()
    {
        //    $id = $_SESSION['id_aluno'];
        $user = $this->getUser();
        $id_aluno = $user['id_aluno'];
        $stm = $this->pdo->prepare("SELECT AC1, AC2, AC3, AC4, AC5, AC6, AC_media, MAC, disciplina.nome from notas
join aluno on notas.id_aluno = aluno.id_aluno
join disciplina on notas.id_disciplina = disciplina.id_disciplina
where notas.id_aluno = $id_aluno order by disciplina.nome");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function notasById_()
    {
        $user = $this->getUser();
        $id_aluno = $user['id_aluno'];
        $stm = $this->pdo->prepare("SELECT PP1, PP2, PP3, PT1, PT2, PT3, MT1, MT2, MT3, m_final, situacao, disciplina.nome from notas
join aluno on notas.id_aluno = aluno.id_aluno
join disciplina on notas.id_disciplina = disciplina.id_disciplina
where notas.id_aluno = $id_aluno order by disciplina.nome");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function logout()
    {
        session_destroy();
        header("Location: /app/");
    }
}