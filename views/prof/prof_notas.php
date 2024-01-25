<?php
require_once('views\layout\layout_prof.php');
?>


<!DOCTYPE html>
<html lang="en">

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Formulário de Notas</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"></li>
                        </li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Adicionar notas do Aluno
                        </div>
                        <!--    <div class="card-header">
                            <h3 class="text-center font-weight-light my-3">Create Account</h3>
                        </div>  -->
                        <div class="card-body">
                            <form action="adicionar_notas" method="POST">
                                <div class="row mb-3">
                                    <h6>Avaliações Continúas</h6>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="AC1" type="text" name="AC1" />
                                            <label for="AC1">AC1</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="AC2" type="text" name="AC2" />
                                            <label for="AC2">AC2</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="AC3" type="text" name="AC3" />
                                            <label for="AC3">AC3</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="AC4" type="text" name="AC4" />
                                            <label for="AC4">AC4</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="AC5" type="text" name="AC5" />
                                            <label for="AC5">AC5</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="AC6" type="text" name="AC6" />
                                            <label for="AC6">AC6</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h6>Provas (PP - Prova do Professor || PF - Prova de Frequência)</h6>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="PP1" type="text" name="PP1" />
                                            <label for="PP1">PP1</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="PP2" type="text" name="password" />
                                            <label for="PP2">PP2</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="PP3" type="text" name="PP3" />
                                            <label for="PP3">PP3</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="PT1" type="text" name="PT1" />
                                            <label for="PT1">PT1</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="PT2" type="text" name="PT2" />
                                            <label for="PT2">PT2</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="PT3" type="text" name="PT3" />
                                            <label for="PT3">PT3</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <h6>Médias (Média do Trimestre)</h6>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="MACs" type="text" name="MACs" />
                                            <label for="MACs">MACs</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="ac_media" type="text" name="ac_media" />
                                            <label for="ac_media">média das avaliações</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="MT1" type="text" name="MT1" />
                                            <label for="MT1">MT1</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="MT2" type="text" name="password" />
                                            <label for="MT2">MT2</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="MT3" type="text" name="MT3" />
                                            <label for="MT3">MT3</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="m_final" type="text" name="m_final" />
                                            <label for="m_final">Média Final</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="situacao" type="text" name="situacao" />
                                            <label for="situacao">Situação</label>
                                        </div>
                                    </div>
                                </div>


                                <!--            <input type="hidden" name="id_curso" value="<?php // echo $_GET['id_curso'] 
                                                                                            ?>" />
                                <input type="hidden" name="id_classe" value="<?php // echo $_GET['id_classe'] 
                                                                                ?>" />
                                <input type="hidden" name="id_turma" value="<?php // echo $_GET['id_turma'] 
                                                                            ?>" />      -->
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Adicionar</button>
                                    </div>
                                </div>
                            </form>
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

</html>