<?php
session_start();

class Administrador_AlunoDAO extends Database
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
        turma.nome as turma_nome,  curso.nome as curso_nome, aluno.tipo_aluno, 
        curso.id_curso as curso_id, turma.id_turma as turma_id, classe.id_classe as classe_id
        from aluno
        join turma on aluno.id_turma = turma.id_turma
        join classe on aluno.id_classe = classe.id_classe
        join curso on aluno.id_curso = curso.id_curso
        where turma.id_turma = $id_turma ");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($nome, $password, $matricula, $tipo, $curso, $classe, $turma)
    {
        $stm = $this->pdo->prepare("INSERT INTO aluno 
        (nome, password, n_matricula, tipo_aluno, id_curso, id_classe, id_turma) 
        VALUES (:nome, :password, :n_matricula, :tipo_aluno, :id_curso, :id_classe, :id_turma)
        ");
        $stm->bindParam(':nome', $nome);
        $stm->bindParam(':password', $password);
        $stm->bindParam(':n_matricula', $matricula);
        $stm->bindParam(':tipo_aluno', $tipo);
        $stm->bindParam(':id_curso', $curso);
        $stm->bindParam(':id_classe', $classe);
        $stm->bindParam(':id_turma', $turma);
        $stm->execute();
        echo "<script>alert('Estudante criado com Sucesso!');
        location.href=' /app/admin_alunos?id_turma=$turma';
        </script>";
    }

    public function getEditar($id_aluno)
    {

        $stm = $this->pdo->prepare("SELECT aluno.id_aluno as id_aluno, aluno.nome as aluno_nome, aluno.username, classe.numeracao,
        aluno.password, turma.nome as turma_nome,  curso.nome as curso_nome, aluno.tipo_aluno, 
        curso.id_curso as curso_id, turma.id_turma as turma_id, classe.id_classe as classe_id
        from aluno
        join turma on aluno.id_turma = turma.id_turma
        join classe on aluno.id_classe = classe.id_classe
        join curso on aluno.id_curso = curso.id_curso
        where aluno.id_aluno = $id_aluno");
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function edit($nome, $password, $tipo, $id, $turma, $curso, $classe) // $curso, $classe, $turma
    {
        $turmas = $this->getTurma($turma);
        $id_turma = $turmas['id_turma'];
        $stm = $this->pdo->prepare("UPDATE aluno 
        SET nome = :nome, password = :password, tipo_aluno = :tipo_aluno, id_curso = :id_curso
        , id_classe = :id_classe, id_turma = :id_turma WHERE (id_aluno = :id_aluno) ");
        $stm->bindParam(':nome', $nome);
        $stm->bindParam(':password', $password);
        $stm->bindParam(':tipo_aluno', $tipo);
        $stm->bindParam(':id_aluno', $id);
        $stm->bindParam(':id_classe', $classe);
        $stm->bindParam(':id_curso', $curso);
        $stm->bindParam(':id_turma', $id_turma);
        $stm->execute();
        //  echo var_dump($turmas);

        //    return $stm->fetch(PDO::FETCH_ASSOC);
        //    header("Location: /app/admin_alunos?id_turma=$turma");
        echo "<script>alert('Estudante editado com Sucesso!');
           location.href=' /app/admin_alunos?id_turma=$id_turma';</script>";
    }

    public function getTurma($turma)
    {

        $stm = $this->pdo->prepare("SELECT * from turma where nome like '$turma%' ");
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function delete($id_aluno, $id_turma)
    {
        $stm = $this->pdo->prepare("DELETE FROM aluno WHERE aluno.id_aluno = $id_aluno");
        $stm->execute();
        header("Location: /app/admin_alunos?id_turma=$id_turma");
    }
    // ---------------------------------------------------------------------------------------------------------------------
    // ----------------------------------------------------------------------------------------------------------------------

}
