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

    // ------------------------------------- Aluno ---------------------------------------

    public function profs()
    {
        $id = $_GET['id_curso'];
        $id_ = $_GET['id_classe'];
        $id__ = $_GET['id_turma'];
        $this->loadView('admin/admin_profs', [
            'profs' => $this->administradorDAO->getProfessor($id, $id_, $id__),
            'turma' => $this->administradorDAO->getTurma($id__)
        ]);
    }

    public function turmas_Profs()
    {
        $this->loadView('admin/turmas_profs', []);
    }

    public function criar_()
    {
        $this->loadView('admin/criar_profs', []);
    }

    public function listar()
    {
        $id = $_GET['id_curso'];
        $id_ = $_GET['id_classe'];
        $id__ = $_GET['id_turma'];
        $this->loadView('admin/listar_profs', [
            'profs' => $this->administradorDAO->getProfessor($id, $id_, $id__),
            'turma' => $this->administradorDAO->getTurma($id__)
        ]);
    }

    public function remover()
    {
        $id = $_GET['id_professor'];
        $id_ = $_GET['id_turma'];
        $curso = $_GET['id_curso'];
        $classe = $_GET['id_classe'];

        $this->administradorDAO->remove($id, $id_, $curso, $classe);
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
