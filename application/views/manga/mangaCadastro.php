<nav class="justify-content-between">
<img src="<?= base_url("application/assets/images/bannerSeason.png") ?>" alt="banner home" width="100%">
</nav>
<main>
    <div class="cd-form">
        <form action="<?php echo site_url('manga/cadastroManga'); ?>" method="post" enctype='multipart/form-data'>
            <h2 class="text-center">Adicionar Mangá ao site</h2>       
            <div class="form-group">
                <input type="text" class="form-control" name="nomeManga" id="nomeManga" required="required" placeholder="Nome do Manga" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="generoManga" id="generoManga" required="required" placeholder="Genero do Manga" />
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="capsManga" id="capsManga" required="required" placeholder="Quantidade de Capitulos" min="0"/>
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file" name="imagemManga" id="imagemManga" required="required"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" id="adicionarManga">Adicionar</button>
            </div>    
        </form>
    </div>
</main>

<!-- <script>
    $("#adicionarManga").on('click', function() {
        cadastrarManga();
    })

    function cadastrarManga() {
        console.log($('input[name="nomeManga"]').val());
        console.log($('input[name="generoManga"]').val());
        console.log($('input[name="capsManga"]').val());

        $.ajax({
            type: 'post',
            url: "<?php echo site_url('manga/cadastroManga'); ?>",
            dataType: 'json',
            data: { 
                nomeManga:$('input[name="nomeManga"]').val(),
                generoManga: $('input[name="generoManga"]').val(),
                capsManga: $('input[name="capsManga"]').val(),
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
                    $("#modalTitle").val("Mangá");
                    $("#modalDesc").val(data.msg);
                    $("#modalManga").modal("show");
                } else {
                    // bootbox.alert({ 
                    //     size: "",
                    //     title: "<b> ATENÇÃO </b>",
                    //     message: "<b><h2>"+data.msg+"</h2></b>", 
                    //     callback: function(){ /* your callback code */ }
                    // });
                    $("#modalTitle").val("Mangá");
                    $("#modalDesc").val(data.msg);
                    $("#modalManga").modal("show");
                } 
                $('input[name="nomeManga"]').val('')
                $('input[name="generoManga"]').val('')
                $('input[name="capsManga"]').val('')    
            }
        });
    }
</script> -->