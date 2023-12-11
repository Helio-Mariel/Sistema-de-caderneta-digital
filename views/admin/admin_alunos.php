<?php
require_once('views\layout\layout_admin.php');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-4">
            <h1 class="mt-4 mr-4">Listagem dos Estudantes</h1>
            <ol class="breadcrumb mb-6">
            </ol>
            <table id="" class="table table-striped table-bordered dataTable no-footer" cellspacing="0"
                style="width: 1110px;">
                <thead>
                    <tr role="row">
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">ID Aluno</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Nome Completo</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Nome Usuário</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Classe</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Curso</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Turma</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Tipo Aluno</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Editar/Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($alunos as $aluno) :
                    ?>
                    <tr role="row" class="odd">
                        <td class="sorting_1"><?php echo $aluno['id_aluno'] ?></td>
                        <td class="sorting_1"><?php echo $aluno['aluno_nome'] ?></td>
                        <td class="sorting_1"><?php echo $aluno['username'] ?></td>
                        <td class="sorting_1"><?php echo $aluno['numeracao'] ?></td>
                        <td class="sorting_1"><?php echo $aluno['curso_nome'] ?></td>
                        <td class="sorting_1"><?php echo $aluno['turma_nome'] ?></td>
                        <td class="sorting_1"><?php echo $aluno['tipo_aluno'] ?></td>
                        <td class="sorting_1"> </td>


                    </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
    </main>
</div>