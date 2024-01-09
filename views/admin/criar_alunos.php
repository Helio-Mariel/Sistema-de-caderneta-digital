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
                    <h1 class="mt-4">Formulário Estudante</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"></li>
                        </li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Criar Estudante
                        </div>
                        <!--    <div class="card-header">
                            <h3 class="text-center font-weight-light my-3">Create Account</h3>
                        </div>  -->
                        <div class="card-body">
                            <form action="criar_alunos" method="POST">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="nome" type="text" name="nome" />
                                            <label for="nome">Nome Completo</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="n_matricula" type="password"
                                                name="password" />
                                            <label for="n_matricula">Password Padrão</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="n_matricula" type="text"
                                                name="n_matricula" />
                                            <label for="n_matricula">Número Matrícula</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="tipo_aluno" type="text" name="tipo_aluno" />
                                            <label for="tipo_aluno">Tipo de Aluno</label>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="id_curso" value="<?php echo $_GET['id_curso'] ?>" />

                                <input type="hidden" name="id_classe" value="<?php echo $_GET['id_classe'] ?>" />

                                <input type="hidden" name="id_turma" value="<?php echo $_GET['id_turma'] ?>" />


                                <!--           <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="inputState">Classe</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Escolha...</option>
                                            <option value="1">10ª Classe</option>
                                            <option value="2">11ª Classe</option>
                                            <option value="3">12ª Classe</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputState">Curso</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Escolha...</option>
                                            <option value="1">Ciências Físicas e Biólogicas </option>
                                            <option value="2">Engenhearia Informática</option>
                                            <option value="3">Construção Cívil</option>
                                            <option value="4">Ciências Económicas e Juridícas</option>

                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="inputState">Turma</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Escolha...</option>
                                            <option value="1">A</option>
                                            <option value="2">B</option>
                                            <option value="3">C</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>  

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="select1">Curso : </label>
                                        <select class="form-control" id="select1" name="id_curso" onchange="atualizarSelect2()">
                                            <option selected>Escolha...</option>
                                            <option value="I">Engenharia Informatica</option>
                                            <option value="CFB">Ciencias Fisicas e Biologicas</option>
                                            <option value="CC">Construção Civil</option>
                                            <option value="CEJ">Ciencias Economicas e Juridicas</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="select2">Classe : </label>
                                        <select class="form-control" id="select2" name="id_classe" onchange="atualizarSelect2()">
                                            <option selected>Escolha...</option>
                                            <option value="1">10ª</option>
                                            <option value="2">11ª</option>
                                            <option value="3">12ª</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="select3">Turma : </label>
                                        <select class="form-control" id="select3" name="id_turma">

                                        </select>
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
                                        if (valorSelect1 === "I" && valorSelect2 === "1") {
                                            var opcoes = ["I1_A", "I1_B", "I1_C"];
                                        } else if (valorSelect1 === "I" && valorSelect2 === "2") {
                                            var opcoes = ["I2_A", "I2_B", "I2_C"];
                                        } else if (valorSelect1 === "I" && valorSelect2 === "3") {
                                            var opcoes = ["I3_A", "I3_B", "I3_C"];
                                        } else if (valorSelect1 === "CFB" && valorSelect2 === "1") {
                                            var opcoes = ["CFB1_A", "CFB1_B", "CFB1_C"];
                                        } else if (valorSelect1 === "CFB" && valorSelect2 === "2") {
                                            var opcoes = ["CFB2_A", "CFB2_B", "CFB2_C"];
                                        } else if (valorSelect1 === "CFB" && valorSelect2 === "3") {
                                            var opcoes = ["CFB3_A", "CFB3_B", "CFB3_C"];
                                        } else if (valorSelect1 === "CC" && valorSelect2 === "1") {
                                            var opcoes = ["CC1_A", "CC1_B", "CC1_C"];
                                        } else if (valorSelect1 === "CC" && valorSelect2 === "2") {
                                            var opcoes = ["CC2_A", "CC2_B", "CC2_C"];
                                        } else if (valorSelect1 === "CC" && valorSelect2 === "3") {
                                            var opcoes = ["CC3_A", "CC3_B", "CC3_C"];
                                        } else if (valorSelect1 === "CEJ" && valorSelect2 === "1") {
                                            var opcoes = ["CEF1_A", "CEF1_B", "CEF1_C"];
                                        } else if (valorSelect1 === "CEJ" && valorSelect2 === "2") {
                                            var opcoes = ["CEF2_A", "CEF2_B", "CEF2_C"];
                                        } else if (valorSelect1 === "CEJ" && valorSelect2 === "3") {
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
                                </script> -->

                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Criar Aluno</button>
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
<!--    <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" type="email"
                                        placeholder="name@example.com" />
                                    <label for="inputEmail">Email address</label>
                                </div>  -->