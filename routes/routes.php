<?php

$routes = [

    '/' => 'HomeController@home_page',
    '/login' => 'HomeController@login',
    '/login2' => 'HomeController@login2',
    '/login_aluno' => 'AlunoController@login',
    '/aluno_home' => 'AlunoController@aluno',
    '/aluno_disciplinas' => 'AlunoController@disciplinas',
    '/logout' => 'AlunoController@logout',






    // ------------------ Teste da Bd  ------------------------
    '/home_test' => 'HomeController@index_db',

    //    '/page' => 'HomeController@index',
    //    '/aluno/{id}' => 'AlunoController@show',

];