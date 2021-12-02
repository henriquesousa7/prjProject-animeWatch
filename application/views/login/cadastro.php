<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100 mt-5">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body" style="padding-left: 90px; padding-right: 90px; padding-bottom: 70px;">
                            <h4 class="card-title text-center">Cadastro</h4>
                            <form action="cadastrarUsuario/" method="post" class="my-login-validation" onsubmit="return validarSenha()">
                                <div class="form-group">
                                    <label for="usuario">Usuario</label>
                                    <input id="usuario" type="text" class="form-control" name="usuario" required autofocus>
                                    <div class="invalid-feedback">
                                        Requer o usuario
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="senha">Senha</label>
                                    <input id="senha" type="password" class="form-control" name="senha" required>
                                </div>

                                <div class="form-group" id="password_message">
                                    <label for="senha">Repetir senha</label>
                                    <input id="senha2" type="password" class="form-control" name="senha2" required>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Cadastrar
                                    </button>
                                </div>
                            </form>
                            <a href="<?= base_url("login/"); ?>" class="btn btn-primary btn-block mt-3">
                                        Voltar
                            </a>
                        </div>
                    </div>              
                </div>
            </div>
        </div>
    </section>

    <script>
        function validarSenha(){
            var senha1 = $('#senha');
            var senha2 = $('#senha2');
            if(senha1.val() !== senha2.val()){
                event.preventDefault();
                if(!$("#password-error").length){
                    let divPassword = $('#password_message')
                    let p = $('<p>', {class: "text-center text-danger", text: "Senhas Diferentes", id: "password-error"})
                    divPassword.append(p);
                }
                senha1.val("")
                senha2.val("")
            }
        }
        $('#submitButton').click(function(){
            validarSenha(event);
        })
    </script>