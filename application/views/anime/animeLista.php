<nav class="justify-content-between">
    <img src="<?= base_url("application/assets/images/bannerTokyo.png") ?>" alt="banner home" width="100%">
</nav>
<h2 class="mt-2 text-center">Lista de Animes</h2>

<div class="container">
        <table class="table table-striped table-action">
            <thead>
                <tr class="text-center">
                    <th scope="col">Nome</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Episodios</th>
                    <th scope="col">Açao</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($animes as $anime): ?>
                    <tr class="text-center">
                        <td><?= $anime['nome_anime'] ?></td>
                        <td><?= $anime['genero_anime'] ?></td>
                        <td><?= $anime['qtd_eps'] ?></td>
                        <td><a href="adicionarMinhaListaAnime/<?= $anime['id'] ?>" class="btn btn-primary resetButton">Adicionar na minha lista</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>