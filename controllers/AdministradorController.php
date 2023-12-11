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

    public function logout()
    {
        $this->administradorDAO->logout();
    }
    // ----------------------------------------------------------------------------
    public function profs()
    {
        $this->loadView('admin/admin_profs', []);
    }

    // ------------------------------------- Prof ---------------------------------------

    public function cursos_Alunos()
    {
        $id = $_GET['id_curso'];
        $this->loadView('admin/cursos_alunos', ['cursos' => $this->administradorDAO->getCursos()]);
    }

    public function classes_Alunos()
    {
        $id = $_GET['id_curso'];
        $id_ = $_GET['id_classe'];

        $this->loadView('admin/classes_alunos', ['classes' => $this->administradorDAO->getClasses($id)]);
    }

    public function turmas_Alunos()
    {
        $id = $_GET['id_curso'];
        $id_ = $_GET['id_classe'];
        $id__ = $_GET['id_turma'];

        $this->loadView('admin/turmas_alunos', ['turmas' => $this->administradorDAO->getTurmas($id, $id_)]);
    }

    public function alunos()
    {
        $id = $_GET['id_turma'];
        $id_ = $_GET['id_aluno'];

        $this->loadView('admin/admin_alunos', ['alunos' => $this->administradorDAO->getAlunos($id)]);
    }
    // ------------------------------------- Aluno ---------------------------------------

    /*   public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $this->administradorDAO->login_admin($username, $password);
    }   */
}