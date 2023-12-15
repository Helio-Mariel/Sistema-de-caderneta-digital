<?php
require_once('views\layout\layout_prof.php');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-4">
            <h1 class="mt-4 mr-4">Página do Professor</h1>
            <ol class="breadcrumb mb-6">
            </ol>
            <table width="100px" class="table table-bordered" cellspacing="">
                <thead>
                </thead>
                <tbody id="table">
                    <tr>
                        <th style="width:170px; background-color: #005384 ; color: white">Nº do prof</th>
                        <td style="height: 10px;" ;><?php echo $professor['id_professor']    ?></td>
                    </tr>
                    <tr>
                        <th style="width:170px; background-color: #005384 ; color: white">Nome</th>
                        <td style="height: 10px;" ;><?php echo $professor['prof_nome']
                                                    ?></td>
                    </tr>
                    <tr>
                        <th style="width:170px; background-color: #005384 ; color: white">Classes</th>
                        <td style="height: 10px;" ;><?php foreach ($classes as $classe) :
                                                        echo  "" . $classe['classe_nome'] . ",";
                                                    endforeach;
                                                    ?></td>
                    </tr>
                    <tr>
                        <th style="width:170px; background-color: #005384 ; color: white">Cursos</th>
                        <td style="height: 10px;" ;><?php foreach ($cursos as $curso) :
                                                        echo "" . $curso['curso_nome'] . ", ";

                                                    endforeach;
                                                    ?></td>
                    </tr>
                    <tr>
                        <th style="width:170px; background-color: #005384 ; color: white">Turma</th>
                        <td style="height: 10px;" ;><?php foreach ($turmas as $turma) :
                                                        echo  "" . $turma['turma_nome'] . ", ";
                                                    endforeach;
                                                    ?></td>
                    </tr>


                </tbody>
                <tfoot>
                </tfoot>
            </table>

        </div>
    </main>
</div>