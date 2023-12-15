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

    public function getCursos()
    {
        $stm = $this->pdo->prepare('SELECT distinct(curso.nome) as curso_nome, curso.id_curso from turma
        join curso on turma.id_curso = curso.id_curso');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getClasses($id_curso)
    {

        $stm = $this->pdo->prepare("SELECT distinct(classe.numeracao), classe.id_classe, curso.id_curso from turma
			join classe on turma.id_classe = classe.id_classe
            join curso on turma.id_curso = curso.id_curso
            where turma.id_curso = $id_curso ");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTurmas($id_curso, $id_classe)
    {

        $stm = $this->pdo->prepare("SELECT id_turma, turma.nome as turma_nome, n_alunos, curso.id_curso, classe.id_classe from turma
        join curso on turma.id_curso = curso.id_curso
        join classe on turma.id_classe = classe.id_classe
        where turma.id_curso =$id_curso and turma.id_classe=$id_classe ");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAlunos($id_turma)
    {

        $stm = $this->pdo->prepare("SELECT aluno.id_aluno, aluno.nome as aluno_nome, aluno.username, classe.numeracao,
        turma.nome as turma_nome,  curso.nome as curso_nome, aluno.tipo_aluno from aluno
        join turma on aluno.id_turma = turma.id_turma
        join classe on aluno.id_classe = classe.id_classe
        join curso on aluno.id_curso = curso.id_curso
        where turma.id_turma = $id_turma ");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function editarAlunos(AlunoDTO $task)
    {
        /*    $stm = $this->pdo->prepare("UPDATE tasks SET name = :name, data = :data, important = :important, completed = NULL WHERE id = :id ");
        $stm->bindParam(':name', $task->name);
        $stm->bindParam(':id', $task->task_id);
        $stm->bindParam(':important', $task->task_check);
        $stm->bindParam(':data', $task->task_date);
        $stm->execute();

        */
    }

    public function delete($id_aluno, $id_turma)
    {
        $stm = $this->pdo->prepare("DELETE FROM aluno WHERE aluno.id_aluno = $id_aluno");
        $stm->execute();
        header("Location: /app/admin_alunos?id_turma=$id_turma");
    }

    public function logout()
    {
        session_destroy();
        header("Location: /app/");
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
}