<?php
require_once('views\layout\layout_admin.php');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-4">
            <h1 class="mt-4 mr-4">Cursos</h1>
            <ol class="breadcrumb mb-6">
            </ol>
            <table id="" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" role="grid"
                aria-describedby="" style="width: 1110px;">
                <thead>
                    <!--     <tr role="row">
                        <th style=" text-align:center ;background-color: rgb(0, 83, 132); color: white; width: 180px;"
                            colspan="10">Cursos
                        </th>
                    </tr> -->
                </thead>
                <tbody>
                    <?php
                    foreach ($cursos as $curso) :
                    ?>
                    <!--       <tr role="row" class="odd">
                        <td class="sorting_1"><a href="#"> 1 </a></td>
                        <td class="sorting_1">1</td>
                    </tr>   -->
                    <tr>
                        <th style="background-color: rgb(0, 83, 132); color: white;">Curso
                        </th>
                        <td> <a href="classes?id_curso=<?php echo $curso['id_curso'] ?>"
                                style="color:black;"><?php echo $curso['curso_nome'] ?> </a></td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</div>