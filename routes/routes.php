<?php

$routes = [

    // ---------------------- Home ----------------------------------------
    '/' => 'HomeController@home_page',
    '/login' => 'HomeController@login',
    '/login_professor' => 'HomeController@login2',
    // ---------------------- Home ----------------------------------------

    // ---------------------- Aluno ---------------------------------------
    '/login_aluno' => 'AlunoController@login',
    '/aluno_home' => 'AlunoController@aluno',
    '/aluno_disciplinas' => 'AlunoController@disciplinas',
    '/aluno_notas' => 'AlunoController@notas',

    '/logout' => 'AlunoController@logout',
    // ---------------------- Aluno ---------------------------------------

    // ---------------------- Professor -----------------------------------
    '/login_prof' => 'ProfessorController@login',
    '/prof_home' => 'ProfessorController@professor',
    '/prof_disciplinas' => 'ProfessorController@disciplinas',
    '/prof_alunos' => 'ProfessorController@alunos',

    '/adicionar_notas' => 'ProfessorController@add_notas',
    '/alterar_notas' => 'ProfessorController@edit_notas',
    '/logout_prof' => 'ProfessorController@logout',
    // ---------------------- Professor -----------------------------------

    // ---------------------- Admin ---------------------------------------
    '/login_admin' => 'AdministradorController@login',
    '/admin_home' => 'AdministradorController@admin',
    '/logout_admin' => 'AdministradorController@logout',
    // ---------------------- Admin ---------------------------------------

    // ---------------------- Admin-Alunos --------------------------------
    '/turmas_alunos' => 'Administrador_AlunoController@turmas_Alunos',
    '/admin_alunos' => 'Administrador_AlunoController@alunos',
    '/criar_' => 'Administrador_AlunoController@criar',
    '/criar_alunos' => 'Administrador_AlunoController@criar_Alunos',
    '/editar_' => 'Administrador_AlunoController@editar',
    '/editar_alunos' => 'Administrador_AlunoController@editar_Alunos',
    '/apagar_alunos' => 'Administrador_AlunoController@apagar',
    // ---------------------- Admin-Alunos ----------------------------------

    // ---------------------- Admin-Professor -------------------------------
    '/turmas_profs' => 'AdministradorController@turmas_Profs',
    '/listar_profs' => 'AdministradorController@listar',
    '/admin_profs' => 'AdministradorController@profs',
    '/criar__' => 'AdministradorController@criar_',
    '/criar_profs' => 'AdministradorController@criar_Profs',
    '/editar__' => 'AdministradorController@editar_',
    '/editar_profs' => 'AdministradorController@editar_Profs',
    '/editar_d' => 'AdministradorController@editar_D',
    '/editar_disciplina' => 'AdministradorController@editar_Disciplina',
    '/atribuir_' => 'AdministradorController@atribuir',
    '/atribuir_profs' => 'AdministradorController@att_Profs',
    '/apagar_profs' => 'AdministradorController@apagar_',
    '/remover_profs' => 'AdministradorController@remover',
    // ---------------------- Admin-Professor --------------------------------
    // ------------------ Teste da Bd  ------------------------
    '/home_test' => 'HomeController@index_db',


];