<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Login</h4>
                            <form action="cadastrarUsuario/" method="post" class="my-login-validation">
                                <div class="form-group">
                                    <label for="usuario">Usuario</label>
                                    <input id="usuario" type="text" class="form-control" name="usuario" required autofocus>
                                    <div class="invalid-feedback">
                                        Requer o usuario
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="senha">Senha</label>
                                    <input id="senha" type="password" class="form-control" name="senha" required data-eye>
                                    <div class="invalid-feedback">
                                        Requer a senha
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Cadastrar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>              
                </div>
            </div>
        </div>
    </section>