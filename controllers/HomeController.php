<?php

class HomeController extends RenderViews
{
    public function home_page()
    {
        $this->loadView('page', []);
    }

    public function login()
    {
        $this->loadView('login', []);
    }

    public function login2()
    {
        $this->loadView('login2', []);
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