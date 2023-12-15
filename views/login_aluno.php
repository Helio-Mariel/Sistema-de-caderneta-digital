<html>

<head>
    <link rel="stylesheet" href="views\Support\css\styles_home.css">
    <link rel="stylesheet" href="views\Support\css\styles_login.css">
</head>

<body data-new-gr-c-s-check-loaded="14.1137.0" data-gr-ext-installed="">
    <section class="vh-100 gradient-custom">
        <div class="container py-6 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10 col-md-6 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form action="login_aluno" method="POST">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Introduza o seu Número de Matrícula e a sua
                                        Palavra-Passe</p>
                                    <div class="form-outline form-white mb-5">
                                        <input type="text" id="n_matricula" class="form-control form-control-lg"
                                            placeholder="Número de Matrícula" name="n_matricula" />
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password" class="form-control form-control-lg"
                                            placeholder="Palavra-Passe" name="password" />
                                    </div>
                                    <p class="small mb-4 pb-lg-2"><a class="text-white-50" href="#!">Forgot
                                            password?</a></p>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="#!" class="text-white"><i
                                                class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>