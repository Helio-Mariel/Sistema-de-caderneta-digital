<?php

class AlunoController extends RenderViews
{
    private $alunoDAO;
    public function __construct()
    {
        $this->alunoDAO = new AlunoDAO();
    }

    public function login()
    {
        $n_matricula = $_POST['n_matricula'];
        $password = $_POST['password'];

        $this->alunoDAO->login($n_matricula, $password);
    }

    public function aluno()
    {
        $this->loadView('aluno/aluno_home', ['aluno' => $this->alunoDAO->fetchById()]);
    }

    public function disciplinas()
    {
        $this->loadView('aluno/aluno_disciplinas', ['disciplinas' => $this->alunoDAO->disciplinasById()]);
    }

    public function notas()
    {
        $this->loadView('aluno/aluno_notas', ['notas' => $this->alunoDAO->disciplinasById()]);
    }

    public function logout()
    {
        $this->alunoDAO->logout();
    }
}