<nav class="justify-content-between">
<img src="<?= base_url("application/assets/images/bannerTokyo.png") ?>" alt="banner home" width="100%">
</nav>
<main>
    <div class="cd-form">
        <form action="/manga/cadastroManga" method="post">
            <h2 class="text-center">Adicionar Manga ao site</h2>       
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
                <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
            </div>    
        </form>
    </div>
</main>