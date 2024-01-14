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

    // ---------------------------------------------------------------------

    public function turmas_Profs()
    {
        $this->loadView('admin/turmas_profs', []);
    }

    public function criar_()
    {
        $this->loadView('admin/criar_profs', []);
    }

    public function criar_Profs()
    {
        $nome   = $_POST['nome'];
        $username    = $_POST['username'];
        $email    = $_POST['email'];
        $password   = $_POST['password'];


        $this->loadView('admin/criar_profs', ['profs' => $this->administradorDAO->create_(
            $nome,
            $username,
            $email,
            $password
        )]);
    }

    public function profs() // Profs_turma
    {
        $id = $_GET['id_curso'];
        $id_ = $_GET['id_classe'];
        $id__ = $_GET['id_turma'];
        $this->loadView('admin/admin_profs', [
            'profs' => $this->administradorDAO->getProfessor($id, $id_, $id__),
            'turma' => $this->administradorDAO->getTurma($id__)
        ]);
    }

    public function listar() // Todos os profs
    {

        $this->loadView('admin/listar_profs', [
            'profs' => $this->administradorDAO->getAll(),
        ]);
    }

    public function editar_()
    {
        $id_ = $_GET['id_professor'];
        $this->loadView('admin/editar_profs', ['prof' => $this->administradorDAO->getEditar($id_)]);
    }

    public function editar_Profs()
    {
        $nome   = $_POST['nome'];
        $username   = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $id = $_POST['id_professor'];


        $this->administradorDAO->edit(
            $nome,
            $username,
            $email,
            $password,
            $id
        );
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
