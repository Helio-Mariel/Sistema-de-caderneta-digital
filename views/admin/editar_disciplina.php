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
                            Editar Disciplina do Professor
                        </div>
                        <div class="card-body">
                            <form action="editar_disciplina" method="POST">
                                <div class="row mb-2">
                                    <div class="col-md-8 mb-2">
                                        <div class="form-floating mb-2 mb-md-0">
                                            <input class="form-control" id="nome" type="text" name="nome"
                                                value="<?php echo $prof['prof_nome']; ?>" readonly />
                                            <label for="nome">Nome Completo</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <label for="disciplina">Disciplina : </label>
                                    <select class="form-control" id="disciplina" name="disciplina">
                                        <option selected>Escolha...</option>
                                        <?php foreach ($disciplinas as $disciplina) : ?>
                                        <option value="<?php echo $disciplina['id_disciplina'] ?>">
                                            <?php echo $disciplina['nome'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <input type="hidden" name="id_turma" value="<?php echo $_GET['id_turma']  ?>" />
                                <input type="hidden" name="id_prof_" value="<?php echo $prof['id_prof_']  ?>" />

                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Editar</button>
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