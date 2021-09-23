<nav class="justify-content-between">
    <img src="<?= base_url("application/assets/images/bannerTokyo.png") ?>" alt="banner home" width="100%">
</nav>
<h2 class="mt-2 text-center">Lista de Animes - Pessoal</h2>

<div class="container">
        <table class="table table-striped table-action">
            <thead>
                <tr class="text-center">
                    <th scope="col">Nome</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Episódios</th>
                    <th scope="col">Status</th>
                    <th scope="col">Episódio Atual</th>
                    <th scope="col">Açao</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($animes as $anime): ?>
                    <tr class="text-center">
                        <td><?= $anime['nome_anime'] ?></td>
                        <td><?= $anime['genero_anime'] ?></td>
                        <td><?= $anime['qtd_eps'] ?></td>
                        <td><?= $anime['status'] ?></td>
                        <td><?= $anime['episodio_atual'] ?></td>
                        <td><a id="editarAnimeMyList" class="btn btn-primary resetButton">Editar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<div class="modal fade" id="modalAnimeMyList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar anime MyList</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="animeEpisodio" class="col-form-label">Episodio Visto:</label>
            <input type="number" class="form-control" id="animeEpisodio" name="animeEpisodio" min=0>
          </div>
          <div class="form-group">
            <select name="statusAnime" class="form-select">
                <option value="Assistindo">Assistindo</option>
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
    $("#editarAnimeMyList").click(function() {
        $("#modalAnimeMyList").modal("show")
    })

</script>