<?php
require_once('views\layout\layout_aluno.php');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-4">
            <h1 class="mt-4 mr-4">Página do Estudante</h1>
            <ol class="breadcrumb mb-6">
            </ol>
            <table width="100px" class="table table-bordered table table-hover" cellspacing="">
                <thead>
                </thead>
                <tbody id="table">

                    <tr>
                        <th style="width:170px; background-color: #005384 ; color: white">Nº de Matrícula
                        </th>
                        <td style="height: 10px;" ;><?php echo $aluno['n_matricula'] ?></td>
                    </tr>
                    <tr>
                        <th style="width:170px; background-color: #005384 ; color: white">Nome</th>
                        <td style="height: 10px;" ;><?php echo $aluno['aluno_nome'] ?></td>
                    </tr>
                    <tr>
                        <th style="width:170px; background-color: #005384 ; color: white">Curso</th>
                        <td style="height: 10px;" ;><?php echo $aluno['curso_nome'] ?></td>
                    </tr>
                    <tr>
                        <th style="width:170px; background-color: #005384 ; color: white">Turma</th>
                        <td style="height: 10px;" ;><?php echo $aluno['turma_nome'] ?></td>
                    </tr>
                    <tr>
                        <th style="width:170px; background-color: #005384 ; color: white">Ano Curricular</th>
                        <td style="height: 10px;" ;><?php echo $aluno['classe_numeracao'] ?></td>
                    </tr>
                    <tr>
                        <th style="width:170px; background-color: #005384 ; color: white">Tipo de Aluno</th>
                        <td style="height: 10px;" ;><?php echo $aluno['tipo_aluno'] ?></td>
                    </tr>
                </tbody>
                <tfoot>
                </tfoot>
            </table>

        </div>
    </main>
</div>