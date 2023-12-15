<?php
require_once('views\layout\layout_admin.php');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-4">
            <h1 class="mt-4 mr-4">Turmas</h1>
            <ol class="breadcrumb mb-6">
            </ol>
            <table id="" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" role="grid" aria-describedby="" style="width: 1110px;">
                <thead>
                    <!--     <tr role="row">
                        <th style=" text-align: center ;  background-color: rgb(0, 83, 132); color: white; width: 180px;"
                            colspan="10">Classes
                        </th>
                    </tr>   -->
                </thead>
                <tbody>
                    <?php
                    foreach ($turmas as $turma) :
                    ?>
                        <!--    <tr role="row" class="odd">
                        <td class="sorting_1"><a href="#"> 1 </a></td>
                        <td class="sorting_1">1</td>
                    </tr> -->
                        <tr>
                            <th style="background-color: rgb(0, 83, 132); color: white;">Turma </th>
                            <td>
                                <a style="color:black" href="admin_alunos?id_turma=<?php echo $turma['id_turma'] ?>">
                                    <?php echo $turma['turma_nome'] ?> </a>
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