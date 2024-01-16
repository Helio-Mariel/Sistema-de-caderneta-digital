<?php
require_once('views\layout\layout_admin.php');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-4">
            <h1 class="mt-4 mr-4">Listagem dos Professores</h1>
            <ol class="breadcrumb mb-6">
            </ol>
            <table class="table table-striped table-bordered dataTable no-footer" cellspacing="0" role="grid"
                aria-describedby="" style="width: 1250px;">
                <thead>
                    <tr role="row">
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">ID Professor</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Nome Completo</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Curso</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Classe</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Turma</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Disciplina</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Add em Turma</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Dados Pessoais</th>
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
                        <td class="sorting_1"><?php echo $prof['curso_nome'] ?></td>
                        <td class="sorting_1"><?php echo $prof['numeracao'] ?></td>
                        <td class="sorting_1"><?php echo $prof['turma_nome'] ?></td>
                        <td class="sorting_1"><?php echo $prof['disc_nome'] ?></td>
                        <td class="sorting_1">
                            <a role="button" class="btn btn-outline-primary"
                                href="atribuir_?id_professor=<?php echo $prof['id_professor'] ?>">
                                Atribuir</a>
                        </td>
                        <td class="sorting_1">
                            <a role="button" class="btn btn-outline-primary"
                                href="editar__?id_professor=<?php echo $prof['id_professor'] ?>">
                                Editar</a>
                        </td>
                        <td class="sorting_1">
                            <a role="button" class="btn btn-outline-primary"
                                href="apagar_profs?id_professor=<?php echo $prof['id_professor'] ?>&id_turma=<?php echo $prof['id_turma'] ?>&id_curso=<?php echo $prof['id_curso'] ?>&id_classe=<?php echo $prof['id_classe']  ?>">
                                Apagar</a>
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