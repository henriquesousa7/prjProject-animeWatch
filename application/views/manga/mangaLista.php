<nav class="justify-content-between">
    <img src="<?= base_url("application/assets/images/bannerSeason.png") ?>" alt="banner home" width="100%">
</nav>
<h2 class="mt-2 text-center">Lista de Mangás</h2>

<div class="container">
        <table class="table table-striped table-action">
            <thead>
                <tr class="text-center">
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Capitulos</th>
                    <th scope="col">Açao</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($mangas)): ?>
                    <?php foreach($mangas as $manga): ?>
                        <tr class="text-center">
                            <td><img src="<?= base_url($manga['imagem']) ?>" /></td>
                            <td><?= $manga['nome_manga'] ?></td>
                            <td><?= $manga['genero_manga'] ?></td>
                            <td><?= $manga['qtd_caps'] ?></td>
                            <td><a href="adicionarMinhaListaManga/<?= $manga['id'] ?>" class="btn btn-primary resetButton">Adicionar na minha lista</a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>