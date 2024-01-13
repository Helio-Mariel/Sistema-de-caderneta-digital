<?php

$routes = [

    '/' => 'HomeController@home_page',
    '/login' => 'HomeController@login',
    '/login_professor' => 'HomeController@login2',
    // ---------------------- Home ----------------------------------------

    '/login_aluno' => 'AlunoController@login',
    '/aluno_home' => 'AlunoController@aluno',
    '/aluno_disciplinas' => 'AlunoController@disciplinas',
    '/logout' => 'AlunoController@logout',
    // ---------------------- Aluno ---------------------------------------

    '/login_prof' => 'ProfessorController@login',
    '/prof_home' => 'ProfessorController@professor',
    '/prof_disciplinas' => 'ProfessorController@disciplinas',
    '/logout_prof' => 'ProfessorController@logout',
    // ---------------------- Professor -----------------------------------

    '/login_admin' => 'AdministradorController@login',
    '/admin_home' => 'AdministradorController@admin',
    '/logout_admin' => 'AdministradorController@logout',
    // ---------------------- Admin --------------------------------------

    '/cursos' => 'AdministradorController@cursos_Alunos',
    '/turmas' => 'AdministradorController@turmas_Alunos',
    '/classes' => 'AdministradorController@classes_Alunos',
    '/admin_alunos' => 'AdministradorController@alunos',
    '/criar_' => 'AdministradorController@criar',
    '/criar_alunos' => 'AdministradorController@criar_Alunos',
    '/editar_' => 'AdministradorController@editar',
    '/editar_alunos' => 'AdministradorController@editar_Alunos',
    '/apagar_alunos' => 'AdministradorController@apagar',

    // ---------------------- Admin-Alunos ---------------------------------

    '/turmas_profs' => 'AdministradorController@turmas_Profs',
    '/listar_profs' => 'AdministradorController@listar',
    '/admin_profs' => 'AdministradorController@profs',
    '/criar__' => 'AdministradorController@criar_',
    '/criar_profs' => 'AdministradorController@criar_Profs',
    '/editar__' => 'AdministradorController@editar_',
    '/editar_profs' => 'AdministradorController@editar_Profs',
    '/apagar_profs' => 'AdministradorController@apagar_',
    '/remover_profs' => 'AdministradorController@remover',

    // ---------------------- Admin-Professor -----------------------------------
    // ------------------ Teste da Bd  ------------------------
    '/home_test' => 'HomeController@index_db',


];