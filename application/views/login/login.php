<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Login</h4>
                            <form action="session/" method="post" class="my-login-validation">
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
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>              
                </div>
            </div>
        </div>
    </section>

<!--    <form action="session/" method="post" style="max-width:500px;margin:auto">
        <h5 class="text-center">Identificando o Usuário</h5>  
        <div class="col-auto">
            <div class="input-group mb-2">
            <div class="input-group-prepend">
                <div class="input-group-text">@</div>
            </div>
            <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="usuario" required="required">
            </div>
        </div>

        <div class="col-auto">
            <div class="input-group mb-2">
            <div class="input-group-prepend">
                <div class="input-group-text">.></div>
            </div>
            <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required="required">
            </div>
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary ">Entrar</button>
        </div>
    </form> 