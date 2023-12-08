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
        $this->loadView('prof_home', ['professor' => $this->professorDAO->fetchById()]);
    }

    /*    public function professor()
    {
        $this->loadView('prof_home', []);
    }
*/

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $this->professorDAO->login_prof($email, $password);
    }

    public function disciplinas()
    {
        $this->loadView('prof_disciplinas', []);
    }

    public function logout()
    {
        $this->professorDAO->logout();
    }
}
