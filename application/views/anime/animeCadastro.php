<nav class="justify-content-between">
<img src="<?= base_url("application/assets/images/bannerTokyo.png") ?>" alt="banner home" width="100%">
</nav>
<main>
    <div class="cd-form">
        <form action="<?php echo site_url('anime/cadastroAnime'); ?>" method="post" enctype='multipart/form-data'>
            <h2 class="text-center">Adicionar Anime ao site</h2>       
            <div class="form-group">
                <input type="text" class="form-control" name="nomeAnime" id="nomeAnime" required="required" placeholder="Nome do Anime" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="generoAnime" id="generoAnime" required="required" placeholder="Genero do Anime" />
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="epsAnime" id="epsAnime" required="required" placeholder="Quantidade de Episodios" min="0"/>
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file" name="imagemAnime" id="imagemAnime" required="required"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" id="adicionarAnime">Adicionar</button>
            </div>    
        </form>
    </div>
</main>

<!-- <script>
    $("#adicionarAnime").on('click', function() {
        cadastrarAnime();
    })

    function cadastrarAnime() {
        console.log($('input[name="nomeAnime"]').val());
        console.log($('input[name="generoAnime"]').val());
        console.log($('input[name="epsAnime"]').val());

        $.ajax({
            type: 'post',
            url: "<?php echo site_url('anime/cadastroAnime'); ?>",
            dataType: 'json',
            data: { 
                nomeAnime:$('input[name="nomeAnime"]').val(),
                generoAnime: $('input[name="generoAnime"]').val(),
                epsAnime: $('input[name="epsAnime"]').val(),
                imagemAnime: new FormData(this),
            },
            error: function(erro) {
                //show_dialog_aguarde('hide');
                bootbox.alert({ 
                    size: "",
                    title: "<b> ATENÇÃO </b>",
                    message: "<b><h2>Desculpe, houve um erro ao executar a ação.Erro " + erro.status + " " + erro.statusText+"</h2></b>", 
                    callback: function(){ /* your callback code */ }
                });
            },
            success: function(data) {
                //show_dialog_aguarde('hide'); 
                if(data.status == true){
                    // bootbox.alert({ 
                    //     size: "",
                    //     title: "<b> ATENÇÃO </b>",
                    //     message: "<b><h2>"+data.msg+"</h2></b>", 
                    //     callback:function(){}
                    // });
                    $("#modalTitle").val("Anime");
                    $("#modalDesc").val(data.msg);
                    $("#modalManga").modal("show");
                } else {
                    // bootbox.alert({ 
                    //     size: "",
                    //     title: "<b> ATENÇÃO </b>",
                    //     message: "<b><h2>"+data.msg+"</h2></b>", 
                    //     callback: function(){ /* your callback code */ }
                    // });
                    $("#modalTitle").val("Anime");
                    $("#modalDesc").val(data.msg);
                    $("#modalManga").modal("show");
                } 
                $('input[name="nomeAnime"]').val('')
                $('input[name="generoAnime"]').val('')
                $('input[name="epsAnime"]').val('')    
            }
        });
    }
</script> -->