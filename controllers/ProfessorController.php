<?php

class ProfessorController extends RenderViews
{

    private $professorDAO;

    public function __construct()
    {
        $this->professorDAO = new ProfessorDAO();
    }


    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $this->professorDAO->login_prof($username, $password);
    }

    public function professor()
    {
        $this->loadView('prof/prof_home', [
            'professor' => $this->professorDAO->fetchById(),
            'disciplinas' => $this->professorDAO->disciplinasById(),
            'classes' => $this->professorDAO->listar_Classes(),
            'turmas' => $this->professorDAO->listar_Turmas(),
            'cursos' => $this->professorDAO->listar_Cursos()


        ]);
    }

    public function disciplinas()
    {
        $this->loadView('prof/prof_disciplinas', ['disciplinas' => $this->professorDAO->disciplinasById()]);
    }

    public function logout()
    {
        $this->professorDAO->logout();
    }
}