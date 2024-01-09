<?php

class AdministradorController extends RenderViews
{
    private $administradorDAO;

    public function __construct()
    {
        $this->administradorDAO = new AdministradorDAO();
    }


    public function admin()
    {
        $this->loadView('admin/admin_home', []);
    }

    // ----------------------------------------------------------------------------

    public function cursos_Alunos()
    {
        //    $id = $_GET['id_curso'];
        $this->loadView('admin/cursos_alunos', ['cursos' => $this->administradorDAO->getCursos()]);
    }

    public function classes_Alunos()
    {
        $id = $_GET['id_curso'];
        //    $id_ = $_GET['id_classe'];

        $this->loadView('admin/classes_alunos', ['classes' => $this->administradorDAO->getClasses($id)]);
    }

    public function turmas_Alunos()
    {
        $id = $_GET['id_curso'];
        $id_ = $_GET['id_classe'];
        //    $id__ = $_GET['id_turma'];

        $this->loadView('admin/turmas_alunos', ['turmas' => $this->administradorDAO->getTurmas($id, $id_)]);
    }

    public function alunos()
    {
        $id = $_GET['id_turma'];
        //    $id_ = $_GET['id_aluno'];

        $this->loadView('admin/admin_alunos', [
            'alunos' => $this->administradorDAO->getAlunos($id)
        ]);
    }

    public function editar()
    {
        $id_ = $_GET['id_aluno'];


        $this->loadView('admin/editar_alunos', ['aluno' => $this->administradorDAO->getEditar($id_)]);
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


        $this->administradorDAO->edit(
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


        $this->loadView('admin/criar_alunos', ['alunos' => $this->administradorDAO->create(
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

        $this->administradorDAO->delete($id, $id_);
    }
    // ------------------------------------- Aluno ---------------------------------------

    public function profs()
    {
        $this->loadView('admin/admin_profs', []);
    }

    // ------------------------------------- Prof ---------------------------------------

    public function logout()
    {
        $this->administradorDAO->logout();
    }
    /*   public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $this->administradorDAO->login_admin($username, $password);
    }   */
}