<?php
require_once('views\layout\layout_admin.php');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-4">
            <h1 class="mt-4 mr-4">Listagem dos Professor da Turma <?php  echo $turma['nome']   ?></h1>
            <ol class="breadcrumb mb-6">
            </ol>
            <?php
            foreach ($profs as $prof) :
            ?>
            <a role="button" class="btn btn-primary" href="">
                Criar novo professor</a>
            <?php /* criar__?id_classe=<?php echo $prof['classe_id'] ?>&id_turma=<?php echo $prof['turma_id'] ?>&id_curso=<?php echo $prof['curso_id'] ?>
            */ ?>
            <?php
                break;
            endforeach;
            ?>
            <table id="" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" role="grid"
                aria-describedby="" style="width: 1110px;">
                <thead>
                    <tr role="row">
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">ID Professor</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Nome Completo</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">E-mail</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Curso</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Classe</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Turma</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Disciplina</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Editar</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($profs as $prof) :
                    ?>
                    <tr role="row" class="odd">
                        <td class="sorting_1"><?php echo $prof['id_professor'] ?></td>
                        <td class="sorting_1"><?php echo $prof['prof_nome'] ?></td>
                        <td class="sorting_1"><?php echo $prof['email'] ?></td>
                        <td class="sorting_1"><?php echo $prof['curso_nome'] ?></td>
                        <td class="sorting_1"><?php echo $prof['numeracao'] ?></td>
                        <td class="sorting_1"><?php echo $prof['turma_nome'] ?></td>
                        <td class="sorting_1"><?php echo $prof['disc_nome'] ?></td>

                        <td class="sorting_1">
                            <a role="button" class="btn btn-outline-primary" href="">
                                Editar</a>
                            <?php /* editar__?id_professor=<?php echo $prof['id_professor'] ?>&id_turma=<?php echo $prof['turma_id'] ?>&id_curso=<?php echo $prof['curso_id'] ?>&id_classe=<?php echo $prof['classe_id'] ?>
                            */ ?>
                        </td>
                        <td class="sorting_1">
                            <a role="button" class="btn btn-outline-primary" href="">
                                Apagar</a>
                            <?php /* apagar_alunos?id_professor=<?php echo $prof['id_professor'] ?>&id_turma=<?php echo $_GET['id_turma'] ?>
                            */ ?>
                        </td>
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