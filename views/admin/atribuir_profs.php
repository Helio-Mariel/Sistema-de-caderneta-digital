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
                            Atribuir Professor em Turma
                        </div>
                        <!--    <div class="card-header">
                            <h3 class="text-center font-weight-light my-3">Create Account</h3>
                        </div>  -->
                        <div class="card-body">
                            <form action="atribuir_profs" method="POST">
                                <div class="row mb-4">
                                    <div class="col-md-10 mb-4">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input readonly class="form-control" id="nome" type="text" name="nome"
                                                value="<?php echo $prof['prof_nome']; ?>" readonly />
                                            <label for="nome">Nome Completo</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="select1">Curso : </label>
                                        <select class="form-control" id="select1" name="id_curso"
                                            onchange="atualizarSelect2()">
                                            <option selected>Escolha...</option>
                                            <option value="2">Engenharia Informatica</option>
                                            <option value="1">Ciências Fisicas e Biologicas</option>
                                            <option value="3">Construção Civil</option>
                                            <option value="4">Ciencias Economicas e Juridicas</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="select2">Classe : </label>
                                        <select class="form-control" id="select2" name="id_classe"
                                            onchange="atualizarSelect2()">
                                            <option selected>Escolha...</option>
                                            <option value="2">10ª</option>
                                            <option value="3">11ª</option>
                                            <option value="4">12ª</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="select3">Turma : </label>
                                        <select class="form-control" id="select3" name="id_turma">
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="disciplina">Disciplina : </label>
                                        <select class="form-control" id="disciplina" name="disciplina">
                                            <option selected>Escolha...</option>
                                            <?php foreach ($disciplinas as $disciplina) : ?>
                                            <option value="<?php echo $disciplina['id_disciplina'] ?>">
                                                <?php echo $disciplina['nome'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <script>
                        function atualizarSelect2() {
                            // Obtém o valor selecionado no primeiro select
                            var select1 = document.getElementById("select1");
                            var valorSelect1 = select1.value;

                            // Obtém o segundo select
                            var select2 = document.getElementById("select2");
                            var valorSelect2 = select2.value;

                            // Limpa as opções existentes no segundo select
                            var select3 = document.getElementById("select3");
                            select3.innerHTML = "";

                            // Adiciona novas opções com base na seleção do primeiro select
                            if (valorSelect1 === "2" && valorSelect2 === "2") {
                                var opcoes = ["I1_A", "I1_B", "I1_C"];
                            } else if (valorSelect1 === "2" && valorSelect2 === "3") {
                                var opcoes = ["I2_A", "I2_B", "I2_C"];
                            } else if (valorSelect1 === "2" && valorSelect2 === "4") {
                                var opcoes = ["I3_A", "I3_B", "I3_C"];
                            } else if (valorSelect1 === "1" && valorSelect2 === "2") {
                                var opcoes = ["CFB1_A", "CFB1_B", "CFB1_C"];
                            } else if (valorSelect1 === "1" && valorSelect2 === "3") {
                                var opcoes = ["CFB2_A", "CFB2_B", "CFB2_C"];
                            } else if (valorSelect1 === "1" && valorSelect2 === "4") {
                                var opcoes = ["CFB3_A", "CFB3_B", "CFB3_C"];
                            } else if (valorSelect1 === "3" && valorSelect2 === "2") {
                                var opcoes = ["CC1_A", "CC1_B", "CC1_C"];
                            } else if (valorSelect1 === "3" && valorSelect2 === "3") {
                                var opcoes = ["CC2_A", "CC2_B", "CC2_C"];
                            } else if (valorSelect1 === "3" && valorSelect2 === "4") {
                                var opcoes = ["CC3_A", "CC3_B", "CC3_C"];
                            } else if (valorSelect1 === "4" && valorSelect2 === "2") {
                                var opcoes = ["CEF1_A", "CEF1_B", "CEF1_C"];
                            } else if (valorSelect1 === "4" && valorSelect2 === "3") {
                                var opcoes = ["CEF2_A", "CEF2_B", "CEF2_C"];
                            } else if (valorSelect1 === "4" && valorSelect2 === "4") {
                                var opcoes = ["CEF3_A", "CEF3_B", "CEF3_C"];
                            } else {
                                var opcoes = ["Escolha..."];
                            }

                            // Adiciona as novas opções ao segundo select
                            for (var i = 0; i < opcoes.length; i++) {
                                var option = document.createElement("option");
                                option.text = opcoes[i];
                                option.value = opcoes[i];
                                select3.add(option);
                            }
                        }

                        // Chama a função inicialmente para configurar as opções do segundo select */
                        atualizarSelect2();
                        </script>

                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">Editar Aluno</button>
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