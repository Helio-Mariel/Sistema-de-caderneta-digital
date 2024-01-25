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

    public function alunos()
    {
        $id_turma  = $_GET['id_turma'];
        $this->loadView('prof/prof_alunos', ['alunos' => $this->professorDAO->getAlunos($id_turma)]);
    }

    public function add()
    {
        $this->loadView('prof/prof_notas', []);
    }

    public function add_notas()
    {
        $AC1 = $_POST['AC1'];
        $AC2 = $_POST['AC2'];
        $AC3 = $_POST['AC3'];
        $AC4 = $_POST['AC4'];
        $AC5 = $_POST['AC5'];
        $AC6 = $_POST['AC6'];
        $ac_media = $_POST['ac_media'];
        $MAC = $_POST['MAC'];
        $PP1 = $_POST['PP1'];
        $PP2 = $_POST['PP2'];
        $PP3 = $_POST['PP3'];
        $PT1 = $_POST['PT1'];
        $PT2 = $_POST['PT2'];
        $PT3 = $_POST['PT3'];
        $MT1 = $_POST['MT1'];
        $MT2 = $_POST['MT2'];
        $MT3 = $_POST['MT3'];
        $m_final = $_POST['m_final'];
        $situacao = $_POST['situacao'];
        $id_aluno = $_POST['id_aluno'];
        $id_disciplina = $_POST['id_disciplina'];
        $id_turma = $_POST['id_turma'];



        //    $this->loadView('prof/prof_notas', ['profs' => $this->professorDAO->add_notas(
        $this->professorDAO->add_notas(
            $AC1,
            $AC2,
            $AC3,
            $AC4,
            $AC5,
            $AC6,
            $ac_media,
            $MAC,
            $PP1,
            $PP2,
            $PP3,
            $PT1,
            $PT2,
            $PT3,
            $MT1,
            $MT2,
            $MT3,
            $m_final,
            $situacao,
            $id_aluno,
            $id_disciplina,
            $id_turma
        );
    }

    public function logout()
    {
        $this->professorDAO->logout();
    }
}