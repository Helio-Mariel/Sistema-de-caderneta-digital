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

    public function getAll()
    {

        $stm = $this->pdo->prepare("SELECT professor.id_professor, professor.nome as prof_nome, 
        curso.nome as curso_nome, classe.numeracao, turma.nome as turma_nome, 
        disciplina.nome as disc_nome,      
        turma.id_turma, curso.id_curso, classe.id_classe
        from prof_turma
        join professor on prof_turma.id_professor = professor.id_professor
        join turma on prof_turma.id_turma = turma.id_turma
        join disciplina on prof_turma.id_disciplina = disciplina.id_disciplina
        join curso on prof_turma.id_curso = curso.id_curso
        join classe on prof_turma.id_classe = classe.id_classe
        order by professor.id_professor");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProfessor($turma)
    {

        $turmas = $this->getTurma($turma);
        $id_turma = $turmas['id_turma'];
        $stm = $this->pdo->prepare("SELECT professor.id_professor, professor.nome as prof_nome, 
        professor.email, curso.nome as curso_nome, classe.numeracao, turma.nome as turma_nome, 
        disciplina.id_disciplina, disciplina.nome as disc_nome,      
        turma.id_turma, curso.id_curso, classe.id_classe
        from prof_turma
        join professor on prof_turma.id_professor = professor.id_professor
        join turma on prof_turma.id_turma = turma.id_turma
        join disciplina on prof_turma.id_disciplina = disciplina.id_disciplina
        join curso on prof_turma.id_curso = curso.id_curso
        join classe on prof_turma.id_classe = classe.id_classe
        where turma.id_turma = $id_turma 
        order by professor.id_professor");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTurma($turma)
    {

        $stm = $this->pdo->prepare("SELECT * from turma where nome like '$turma%' ");
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function create_($nome, $username, $email, $password)
    {
        $stm = $this->pdo->prepare("INSERT INTO professor (nome, username, email, password) 
        VALUES (:nome, :username, :email, :password)
        ");
        $stm->bindParam(':nome', $nome);
        $stm->bindParam(':username', $username);
        $stm->bindParam(':email', $email);
        $stm->bindParam(':password', $password);
        $stm->execute();
        echo "<script>alert('Professor criado com Sucesso!');
        location.href=' /app/listar_profs?';
        </script>";
    }

    public function getEditar($id_professor)
    {

        $stm = $this->pdo->prepare("SELECT * from professor where professor.id_professor = $id_professor");
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function edit($nome, $username, $email, $password, $id) // $curso, $classe, $turma
    {
        $stm = $this->pdo->prepare("UPDATE professor 
        SET nome = :nome, username = :username, email = :email, password = :password
        WHERE id_professor = :id_professor");
        $stm->bindParam(':nome', $nome);
        $stm->bindParam(':username', $username);
        $stm->bindParam(':email', $email);
        $stm->bindParam(':password', $password);
        $stm->bindParam(':id_professor', $id);
        $stm->execute();

        echo "<script>alert('Professor editado com Sucesso!');
           location.href=' /app/listar_profs'
           </script>";
    }

    public function getAtribuir($id_aluno)
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

    public function getDisciplina()
    {

        $stm = $this->pdo->prepare("SELECT * from disciplina ");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function remove($id_professor, $turma, $disciplina, $id_curso, $id_classe)
    {
        $turmas = $this->getTurma($turma);
        $id_turma = $turmas['id_turma'];
        $stm = $this->pdo->prepare("DELETE FROM prof_turma WHERE prof_turma.id_professor = $id_professor and prof_turma.id_turma = $id_turma and prof_turma.id_disciplina = $disciplina");
        $stm->execute();
        header("Location: /app/admin_profs?id_curso=$id_curso&id_classe=$id_classe&id_turma=$turma");
    }

    public function removeP($id_professor, $turma, $disciplina, $id_curso, $id_classe)
    {
        $turmas = $this->getTurma($turma);
        $id_turma = $turmas['id_turma'];
        $stm = $this->pdo->prepare("DELETE FROM prof_turma WHERE prof_turma.id_professor = $id_professor and prof_turma.id_turma = $id_turma and prof_turma.id_disciplina = $disciplina");
        $stm->execute();
        header("Location: /app/admin_profs?id_curso=$id_curso&id_classe=$id_classe&id_turma=$turma");
    }

    // ----------------------------------------------------------------------------------------------------------------------

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

    /*   public function getProfessor($id_curso, $id_classe, $turma)
    {

        $turmas = $this->getTurma($turma);
        $id_turma = $turmas['id_turma'];
        $stm = $this->pdo->prepare("SELECT professor.id_professor, professor.nome as prof_nome, 
        professor.email, curso.nome as curso_nome, classe.numeracao, turma.nome as turma_nome, 
        disciplina.id_disciplina, disciplina.nome as disc_nome,      
        turma.id_turma, curso.id_curso, classe.id_classe
        from prof_turma
        join professor on prof_turma.id_professor = professor.id_professor
        join turma on prof_turma.id_turma = turma.id_turma
        join disciplina on prof_turma.id_disciplina = disciplina.id_disciplina
        join curso on prof_turma.id_curso = curso.id_curso
        join classe on prof_turma.id_classe = classe.id_classe
        where curso.id_curso = $id_curso and classe.id_classe = $id_classe and turma.id_turma = $id_turma 
        order by professor.id_professor");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }   */
}