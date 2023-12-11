<?php

class HomeController extends RenderViews
{
    public function home_page()
    {
        $this->loadView('home_page', []);
    }

    public function login()
    {
        $this->loadView('login_aluno', []);
    }

    public function login2()
    {
        $this->loadView('login_prof', []);
    }

    //                                                                                      
    public function index_db()
    {
        $aluno = new AlunoDAO();

        $this->loadView('home_db_test', [
            'title' => 'Home Page',
            'aluno' =>  $aluno->fetch()
        ]);
    }
    // -------------------------------------------
}