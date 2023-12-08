<?php
require_once('layout/layout_prof.php');
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
                        <td style="width:170px; background-color: #005384 ; color: white">Nº do prof</td>
                        <td style="height: 10px;" ;><?php echo $professor['id_professor']    ?></td>
                    </tr>
                    <tr>
                        <td style="width:170px; background-color: #005384 ; color: white">Nome</td>
                        <td style="height: 10px;" ;><?php echo $professor['prof_nome']
                                                    ?></td>
                    </tr>
                    <tr>
                        <td style="width:170px; background-color: #005384 ; color: white">Classes</td>
                        <td style="height: 10px;" ;><?php foreach ($disciplinas as $disciplina) :
                                                        echo  "" . $disciplina['classe_nome'] . ",";
                                                    endforeach;
                                                    ?>.</td>
                    </tr>
                    <tr>
                        <td style="width:170px; background-color: #005384 ; color: white">Cursos</td>
                        <td style="height: 10px;" ;><?php foreach ($disciplinas as $disciplina) :
                                                        echo "" . $disciplina['curso_nome'] . ", ";

                                                    endforeach;
                                                    ?>.</td>
                    </tr>
                    <tr>
                        <td style="width:170px; background-color: #005384 ; color: white">Turma</td>
                        <td style="height: 10px;" ;><?php foreach ($disciplinas as $disciplina) :
                                                        echo  "" . $disciplina['turma_nome'] . ", ";
                                                    endforeach;
                                                    ?>.</td>
                    </tr>


                </tbody>
                <tfoot>
                </tfoot>
            </table>

        </div>
    </main>
</div>