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

    public function profs() // Profs_turma
    {

        $id__ = $_GET['id_turma'];
        $this->loadView('admin/admin_profs', [
            'profs' => $this->administradorDAO->getProfessor($id__),
            'turma' => $this->administradorDAO->getTurma($id__)
        ]);
    }

    public function listar() // Todos os profs
    {

        $this->loadView('admin/listar_profs', [
            'profs' => $this->administradorDAO->getAll(),
        ]);
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

    public function editar_()
    {
        $id_ = $_GET['id_professor'];
        $this->loadView('admin/editar_profs', [
            'prof' => $this->administradorDAO->getEditar($id_),
            'disciplinas' => $this->administradorDAO->getDisciplina()
        ]);
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

    public function editar_D()
    {
        $id_ = $_GET['id_professor'];
        $this->loadView('admin/editar_disciplina', [
            'prof' => $this->administradorDAO->getDisciplina_($id_),
            'disciplinas' => $this->administradorDAO->getDisciplina()
        ]);
    }

    public function editar_Disciplina()
    {

        $id = $_POST['id_prof_'];
        $id_disciplina = $_POST['disciplina'];
        $id_turma    = $_POST['id_turma'];

        $this->administradorDAO->edit_Disciplina(
            $id,
            $id_disciplina,
            $id_turma
        );
    }

    public function atribuir()
    {
        $id_ = $_GET['id_professor'];
        $this->loadView('admin/atribuir_profs', [
            'prof' => $this->administradorDAO->getAtribuir($id_),
            'disciplinas' => $this->administradorDAO->getDisciplina()
        ]);
    }

    public function att_Profs()
    {
        $id_professor   = $_POST['id_professor'];
        $id_turma    = $_POST['id_turma'];
        $id_disciplina    = $_POST['id_disciplina'];
        $id_curso   = $_POST['id_curso'];
        $id_classe   = $_POST['id_classe'];

        $this->loadView('admin/criar_profs', ['profs' => $this->administradorDAO->Atribuir(
            $id_professor,
            $id_turma,
            $id_disciplina,
            $id_curso,
            $id_classe
        )]);
    }

    public function remover()
    {
        $id = $_GET['id_professor'];
        $id_ = $_GET['id_turma'];
        $disciplina = $_GET['id_disciplina'];
        $curso = $_GET['id_curso'];
        $classe = $_GET['id_classe'];

        $this->administradorDAO->remove($id, $id_, $disciplina, $curso, $classe);
    }

    public function apagar_()
    {
        $id = $_GET['id_professor'];

        $this->administradorDAO->delete($id);
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