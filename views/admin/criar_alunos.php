<?php
require_once('views\layout\layout_admin.php');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-4">
            <h1 class="mt-4 mr-4">Criação de um Estudante</h1>
            <ol class="breadcrumb mb-6">
            </ol>
            <div class="container-fluid">
                <form>
                    <div class="form-group col-md-3">
                        <label for="formGroupExampleInput">Nome Completo </label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome Completo">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="formGroupExampleInput">Nome de Usuário </label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome de Usuário">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputPassword4">Password Padrão</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        <small id="passwordHelpInline" class="text-muted">
                            Must be 8-20 characters long.
                        </small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="formGroupExampleInput">Tipo de Aluno </label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tipo de Aluno">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="inputState">Classe</label>
                        <select id="inputState" class="form-control">
                            <option selected>Escolha...</option>
                            <option value="1">10ª</option>
                            <option value="2">11ª</option>
                            <option value="3">12ª</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">

                        <label for="inputState">Curso</label>
                        <select id="inputState" class="form-control">
                            <option selected>Escolha...</option>
                            <option value="1">CEJ</option>
                            <option value="1">CFB</option>
                            <option value="2">E.I</option>
                            <option value="3">CC</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputState">Turma</label>
                        <select id="inputState" class="form-control">
                            <option selected>Escolha...</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option>...</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Criar</button>
            </div>
            </form>
        </div>
</div>
</main>
</div>