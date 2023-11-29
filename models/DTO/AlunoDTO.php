<?php
class AlunoDTO
{

    public $id_aluno;
    /**
     * Summary of password
     * @var 
     */
    public $username;
    /**
     * Summary of email
     * @var 
     */
    public $password;
    /**
     * Summary of email
     * @var 
     */
    public $nome;
    /**
     * Summary of email
     * @var 
     */
    public $sobrenome;
    /**
     * Summary of email
     * @var 
     */
    public $id_turma;
    /**
     * Summary of email
     * @var 
     */
    public $id_classe;
    /**
     * Summary of email
     * @var 
     */
    public $id_curso;
    /**
     * Summary of email
     * @var 
     */
    public function __construct($id_aluno, $username, $password, $nome, $sobrenome, $id_turma, $id_classe, $id_curso)
    {
        $this->id_aluno = $id_aluno;
        $this->username = $username;
        $this->password = $password;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->id_turma = $id_turma;
        $this->id_classe = $id_classe;
        $this->id_curso = $id_curso;
    }
}