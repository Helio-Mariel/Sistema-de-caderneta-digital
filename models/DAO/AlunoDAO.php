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

    public function fetchById()
    {
        $id = $_SESSION['id_aluno'];
        $user = $this->getUser();

        $stm = $this->pdo->prepare("SELECT aluno.id_aluno, aluno.nome as aluno_nome, aluno.tipo_aluno, curso.nome as curso_nome, turma.nome as turma_nome,
classe.numeracao as classe_numeracao from aluno 
join curso  on curso.id_curso = :curso
join turma  on turma.id_turma = :turma
join classe on classe.id_classe = :classe
where aluno.id_aluno = :id_aluno ;");
        //    $stm->execute([$id]);
        $stm->bindParam(':id_aluno', $user['id_aluno']);
        $stm->bindParam(':turma', $user['id_turma']);
        $stm->bindParam(':curso', $user['id_curso']);
        $stm->bindParam(':classe', $user['id_classe']);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function getUser()
    {
        $id = $_SESSION['id_aluno'];
        $stm = $this->pdo->prepare('SELECT * from aluno where id_aluno = ?');
        $stm->execute([$id]);
        return $stm->fetch(PDO::FETCH_ASSOC);
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
            return false;
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location: /app/login");
    }
}
