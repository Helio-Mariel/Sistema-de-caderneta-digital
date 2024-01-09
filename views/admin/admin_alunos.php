<?php
require_once('views\layout\layout_admin.php');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-4">
            <h1 class="mt-4 mr-4">Listagem dos Estudantes</h1>
            <ol class="breadcrumb mb-6">
            </ol>
            <?php
            foreach ($alunos as $aluno) :
            ?>
                <a role="button" class="btn btn-primary" href="criar_?id_classe=<?php echo $aluno['classe_id'] ?>&id_turma=<?php echo $aluno['turma_id'] ?>&id_curso=<?php echo $aluno['curso_id'] ?>">
                    Criar novo aluno</a>
            <?php
                break;
            endforeach;
            ?>
            <table id="" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" style="width: 1110px;">
                <thead>
                    <tr role="row">
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">ID Aluno</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Nome Completo</th>
                        <!--    <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Nome Usuário</th>    -->
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Classe</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Curso</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Turma</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Tipo Aluno</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Editar</th>
                        <th style="background-color: rgb(0, 83, 132); color: white; width: 180px;">Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($alunos as $aluno) :
                    ?>
                        <tr role="row" class="odd">
                            <td class="sorting_1"><?php echo $aluno['id_aluno'] ?></td>
                            <td class="sorting_1"><?php echo $aluno['aluno_nome'] ?></td>
                            <!--     <td class="sorting_1"><?php // echo $aluno['username'] 
                                                            ?></td> -->
                            <td class="sorting_1"><?php echo $aluno['numeracao'] ?></td>
                            <td class="sorting_1"><?php echo $aluno['curso_nome'] ?></td>
                            <td class="sorting_1"><?php echo $aluno['turma_nome'] ?></td>
                            <td class="sorting_1"><?php echo $aluno['tipo_aluno'] ?></td>
                            <td class="sorting_1">
                                <a role="button" class="btn btn-outline-primary" href="editar_?id_aluno=<?php echo $aluno['id_aluno'] ?>&id_turma=<?php echo $aluno['turma_id'] ?>&id_curso=<?php echo $aluno['curso_id'] ?>&id_classe=<?php echo $aluno['classe_id'] ?>">
                                    Editar</a>
                            </td>
                            <td class="sorting_1">
                                <a role="button" class="btn btn-outline-primary" href="apagar_alunos?id_aluno=<?php echo $aluno['id_aluno'] ?>&id_turma=<?php echo $_GET['id_turma'] ?>">
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

<!--
<!DOCTYPE html>
<html lang="en">

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tables</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>
                    <div class="card mb-5">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            DataTables is a third party plugin that is used to generate the demo table below. For more
                            information about DataTables, please visit the
                            <a target="_blank" href="https://datatables.net/"></a>.
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html> -->