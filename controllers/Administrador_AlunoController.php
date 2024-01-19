<?php

class Administrador_AlunoController extends RenderViews
{
    private $administrador_AlunoDAO;

    public function __construct()
    {
        $this->administrador_AlunoDAO = new Administrador_AlunoDAO();
    }


    public function admin()
    {
        $this->loadView('admin/admin_home', []);
    }

    // -----------------------------------------------------------------------------------------------------------------

    public function turmas_Alunos()
    {
        //    $id = $_GET['id_curso'];
        //    $id_ = $_GET['id_classe'];
        //    $id__ = $_GET['id_turma'];

        $this->loadView('admin/turmas_alunos', []);
    }


    public function cursos_Alunos()
    {
        //    $id = $_GET['id_curso'];
        $this->loadView('admin/cursos_alunos', ['cursos' => $this->administrador_AlunoDAO->getCursos()]);
    }

    public function classes_Alunos()
    {
        $id = $_GET['id_curso'];
        //    $id_ = $_GET['id_classe'];

        $this->loadView('admin/classes_alunos', ['classes' => $this->administrador_AlunoDAO->getClasses($id)]);
    }

    /*    public function turmas_Alunos()
    {
        $id = $_GET['id_curso'];
        $id_ = $_GET['id_classe'];
        //    $id__ = $_GET['id_turma'];

        $this->loadView('admin/turmas_alunos', ['turmas' => $this->administrador_AlunoDAO->getTurmas($id, $id_)]);
    }
    */

    public function alunos()
    {
        $id = $_GET['id_turma'];
        //    $id_ = $_GET['id_aluno'];

        $this->loadView('admin/admin_alunos', [
            'alunos' => $this->administrador_AlunoDAO->getAlunos($id)
        ]);
    }

    public function editar()
    {
        $id_ = $_GET['id_aluno'];

        $this->loadView('admin/editar_alunos', ['aluno' => $this->administrador_AlunoDAO->getEditar($id_)]);
    }

    public function editar_Alunos()
    {
        $nome   = $_POST['nome'];
        $password   = $_POST['password'];
        $tipo    = $_POST['tipo_aluno'];
        $id = $_POST['id_aluno'];
        $turma = $_POST['id_turma'];
        $curso = $_POST['id_curso'];
        $classe = $_POST['id_classe'];


        $this->administrador_AlunoDAO->edit(
            $nome,
            $password,
            $tipo,
            $id,
            $turma,
            $curso,
            $classe
        );
    }

    public function criar()
    {

        $this->loadView('admin/criar_alunos', []);
    }

    public function criar_Alunos()
    {
        $nome   = $_POST['nome'];
        $password   = $_POST['password'];
        $matricula    = $_POST['n_matricula'];
        $tipo    = $_POST['tipo_aluno'];
        $curso   = $_POST['id_curso'];
        $classe    = $_POST['id_classe'];
        $turma    = $_POST['id_turma'];

        $this->loadView('admin/criar_alunos', ['alunos' => $this->administrador_AlunoDAO->create(
            $nome,
            $password,
            $matricula,
            $tipo,
            $curso,
            $classe,
            $turma
        )]);
    }

    public function apagar()
    {
        $id = $_GET['id_aluno'];
        $id_ = $_GET['id_turma'];

        $this->administrador_AlunoDAO->delete($id, $id_);
    }
    // ------------------------------------- Aluno ---------------------------------------
}