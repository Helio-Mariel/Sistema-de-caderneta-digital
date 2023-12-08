<?php
class ProfessorController extends RenderViews
{
    private $professorDAO;

    public function __construct()
    {
        $this->professorDAO = new ProfessorDAO();
    }


    public function professor()
    {
        $this->loadView('prof_home', ['professor' => $this->professorDAO->fetchById(), 'disciplinas' => $this->professorDAO->disciplinasById1()]);
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $this->professorDAO->login_prof($email, $password);
    }

    public function disciplinas()
    {
        $this->loadView('prof_disciplinas', ['disciplinas' => $this->professorDAO->disciplinasById()]);
    }

    public function logout()
    {
        $this->professorDAO->logout();
    }
}
