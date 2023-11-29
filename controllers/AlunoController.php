<?php

class AlunoController extends RenderViews
{
    private $alunoDAO;
    public function __construct()
    {
        $this->alunoDAO = new AlunoDAO();
    }
    public function aluno()
    {
        $this->loadView('aluno_home', ['aluno' => $this->alunoDAO->fetchById()]);
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $this->alunoDAO->login($username, $password);
    }

    public function disciplinas()
    {
        $this->loadView('aluno_disciplinas', []);
    }



    public function logout()
    {
        $this->alunoDAO->logout();
    }
}