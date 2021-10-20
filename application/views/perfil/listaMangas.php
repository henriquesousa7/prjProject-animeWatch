<nav class="justify-content-between">
    <img src="<?= base_url("application/assets/images/bannerTokyo.png") ?>" alt="banner home" width="100%">
</nav>
<h2 class="mt-2 text-center">Lista de Mangás - Pessoal</h2>

<div class="container">
        <table class="table table-striped table-action">
            <thead>
                <tr class="text-center">
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Capitulos</th>
                    <th scope="col">Status</th>
                    <th scope="col">Capitulo Atual</th>
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
                        <td><?= $manga['status'] ?></td>
                        <td><?= $manga['capitulo_atual'] ?></td>
                        <td><a id="editarMangaMyList" class="btn btn-primary resetButton">Editar</a></td>
                    </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="modalMangaMyList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar manga MyList</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="animeEpisodio" class="col-form-label">Capitulo Visto:</label>
            <input type="number" class="form-control" id="animeEpisodio" name="animeEpisodio" min=0>
          </div>
          <div class="form-group">
            <select name="statusAnime" class="form-select">
                <option value="Lendo">Lendo</option>
                <option value="Em espera" selected>Em espera</option>
                <option value="Finalizado">Finalizado</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Atualizar</button>
      </div>
    </div>
  </div>
</div>

<script>
    $("#editarMangaMyList").click(function() {
        $("#modalMangaMyList").modal("show")
    })

</script>