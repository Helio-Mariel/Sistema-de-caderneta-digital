<?php
require_once('views\layout\layout_aluno.php');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-5 mt-4">
            <h1 class="mt-4 mr-4">Disciplinas do Estudante</h1>
            <ol class="breadcrumb mb-6">
            </ol>
            <table id="table1B" class="table table-striped table-bordered dataTable no-footer" cellspacing="0"
                role="grid" aria-describedby="table1B_info" style="width: 1109px;">
                <thead>
                    <tr role="row">
                        <th style="background-color: rgb(0, 83, 132); color: white; font-size: 16px; width: 448.778px;"
                            tabindex="0" aria-controls="table1B" rowspan="1" colspan="1"
                            aria-label="Professores: activate to sort column ascending" aria-sort="descending">
                            Professores</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; font-size: 16px; width: 489.778px;"
                            rowspan="1" colspan="1" aria-label="Disciplinas">Disciplinas</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; font-size: 16px; width: 489.778px;"
                            rowspan="1" colspan="1" aria-label="Dia">Dia da Semana</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    foreach ($disciplinas as $disciplina) :
                    ?>
                    <tr role="row" class="odd">
                        <td class="sorting_1"> <?php echo $disciplina['prof_nome'] ?></td>
                        <td> <?php echo $disciplina['disciplina_nome'] ?> </td>
                        <td> <?php echo $disciplina['dia']
                                    ?> </td>

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