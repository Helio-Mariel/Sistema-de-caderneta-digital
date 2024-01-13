<?php
require_once('views\layout\layout_admin.php');
?>
<!DOCTYPE html>
<html lang="en">

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Formulário Professor</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"></li>
                        </li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Criar Professor
                        </div>
                        <!--    <div class="card-header">
                            <h3 class="text-center font-weight-light my-3">Create Account</h3>
                        </div>  -->
                        <div class="card-body">
                            <form action="criar_profs" method="POST">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="nome" type="text" name="nome" />
                                            <label for="nome">Nome Completo</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="username" type="text" name="username" />
                                            <label for="username">Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="email" type="email" name="email" />
                                            <label for="email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="password" type="password" name="password" />
                                            <label for="n_matricula">Password Padrão</label>
                                        </div>
                                    </div>
                                </div>
                                <!--                 <input type="hidden" name="id_curso" value="<?php // echo $_GET['id_curso'] 
                                                                                                    ?>" />

                                <input type="hidden" name="id_classe" value="<?php //echo $_GET['id_classe'] 
                                                                                ?>" />

                                <input type="hidden" name="id_turma" value="<?php // echo $_GET['id_turma'] 
                                                                            ?>" /> -->

                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Criar</button>
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