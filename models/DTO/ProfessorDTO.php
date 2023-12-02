<?php
class AlunoDTO
{

    public $id_professor;
    /**
     * Summary of password
     * @var 
     */
    public $nome;
    /**
     * Summary of email
     * @var 
     */
    public $email;
    /**
     * Summary of email
     * @var 
     */
    public $password;
    /**
     * Summary of email
     * @var 
     */
    public function __construct($id_professor, $nome,  $email, $password)
    {
        $this->id_professor = $id_professor;
        $this->nome = $nome;
        $this->email = $email;
        $this->password = $password;
    }
}