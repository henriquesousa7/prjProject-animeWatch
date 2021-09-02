<nav class="justify-content-between">
<img src="<?= base_url("application/assets/images/bannerTokyo.png") ?>" alt="banner home" width="100%">
</nav>
<main>
    <div class="cd-form">
        <form action="/anime/cadastroAnime" method="post">
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
                <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
            </div>    
        </form>
    </div>
</main>