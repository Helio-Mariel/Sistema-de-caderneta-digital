<?php
require_once('views\layout\layout_admin.php');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-4">
            <h1 class="mt-4 mr-4">Listagem dos Professor da Turma <?php echo $turma['nome']   ?></h1>
            <ol class="breadcrumb mb-6">
            </ol>
            <table class="table table-striped table-bordered dataTable no-footer" cellspacing="0" role="grid"
                aria-describedby="" style="width: 1250px;">
                <thead>
                    <tr role="row">
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">ID Professor</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Nome Completo</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Disciplina</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Disciplina</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Remover da Turma</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($profs as $prof) :
                    ?>
                    <tr role="row" class="odd">
                        <td class="sorting_1"><?php echo $prof['id_professor'] ?></td>
                        <td class="sorting_1"><?php echo $prof['prof_nome'] ?></td>
                        <td class="sorting_1"><?php echo $prof['disc_nome'] ?></td>

                        <td class="sorting_1">
                            <a role="button" class="btn btn-outline-primary"
                                href="editar_d?id_professor=<?php echo $prof['id_professor'] ?>&id_turma=<?php echo $turma['nome'] ?>&id_disciplina=<?php echo $prof['id_disciplina'] ?>">
                                Editar</a>
                        </td>
                        <td class="sorting_1">
                            <a role="button" class="btn btn-outline-primary"
                                href="remover_profs?id_professor=<?php echo $prof['id_professor'] ?>&id_turma=<?php echo $turma['nome'] ?>&id_disciplina=<?php echo $prof['id_disciplina']  ?>">
                                Remover</a>
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