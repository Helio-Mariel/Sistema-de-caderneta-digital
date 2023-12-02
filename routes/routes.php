<?php

$routes = [

    '/' => 'HomeController@home_page',
    '/login' => 'HomeController@login',
    '/login2' => 'HomeController@login2',
    // ----------------------- Home -----------------------------------
    '/login_aluno' => 'AlunoController@login',
    '/aluno_home' => 'AlunoController@aluno',
    '/aluno_disciplinas' => 'AlunoController@disciplinas',
    '/logout' => 'AlunoController@logout',
    // ---------------------- Aluno ----------------------------------
    '/login_prof' => 'ProfessorController@login',
    '/prof_home' => 'ProfessorController@professor',
    '/prof_disciplinas' => 'ProfessorController@disciplinas',
    '/logout_prof' => 'ProfessorController@logout',
    // ---------------------- Professor -------------------------------
    '/login_admin' => 'AdministradorController@login',
    '/admin_home' => 'AdministradorController@admin',
    '/logout_admin' => 'AdministradorController@logout',




    // ---------------------- Admin -----------------------------------



    // ------------------ Teste da Bd  ------------------------
    '/home_test' => 'HomeController@index_db',

    //    '/page' => 'HomeController@index',
    //    '/aluno/{id}' => 'AlunoController@show',

];
