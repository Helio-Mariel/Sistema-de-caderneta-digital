<?php

$routes = [

    '/' => 'HomeController@home_page',
    '/login' => 'HomeController@login',
    '/login_professor' => 'HomeController@login2',
    // ---------------------- Home -----------------------------------

    '/login_aluno' => 'AlunoController@login',
    '/aluno_home' => 'AlunoController@aluno',
    '/aluno_disciplinas' => 'AlunoController@disciplinas',
    '/logout' => 'AlunoController@logout',
    // ---------------------- Aluno -----------------------------------

    '/login_prof' => 'ProfessorController@login',
    '/prof_home' => 'ProfessorController@professor',
    '/prof_disciplinas' => 'ProfessorController@disciplinas',
    '/logout_prof' => 'ProfessorController@logout',
    // ---------------------- Professor -----------------------------------

    '/login_admin' => 'AdministradorController@login',
    '/admin_home' => 'AdministradorController@admin',
    '/logout_admin' => 'AdministradorController@logout',
    // ---------------------- Admin -----------------------------------

    '/cursos' => 'AdministradorController@cursos_Alunos',
    '/turmas' => 'AdministradorController@turmas_Alunos',
    '/classes' => 'AdministradorController@classes_Alunos',
    '/admin_alunos' => 'AdministradorController@alunos',
    // ---------------------- Admin-Alunos -----------------------------------

    '/cursos_' => 'AdministradorController@cursos_Profs',
    '/classes_' => 'AdministradorController@classes_Profs',
    '/admin_profs' => 'AdministradorController@profs',
    // ---------------------- Admin-Professor -----------------------------------


    // ------------------ Teste da Bd  ------------------------
    '/home_test' => 'HomeController@index_db',


];
