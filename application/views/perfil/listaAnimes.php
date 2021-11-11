<nav class="justify-content-between">
    <img src="<?= base_url("application/assets/images/bannerTokyo.png") ?>" alt="banner home" width="100%">
</nav>
<h2 class="mt-2 text-center">Lista de Animes - Pessoal</h2>

<div class="container">
        <table class="table table-striped table-action">
            <thead>
                <tr class="text-center">
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Episódios</th>
                    <th scope="col">Status</th>
                    <th scope="col">Episódio Atual</th>
                </tr>
            </thead>
            <tbody>
            <?php if(isset($animes)): ?>
                <?php foreach($animes as $anime): ?>
                    <tr class="text-center" id="<?= $anime['anime_usuario_id'] ?>" episodios="<?= $anime['qtd_eps'] ?>">
                        <td><img src="<?= base_url($anime['imagem']) ?>" /></td>
                        <td><?= $anime['nome_anime'] ?></td>
                        <td><?= $anime['genero_anime'] ?></td>
                        <td><?= $anime['qtd_eps'] ?></td>
                        <td><?= $anime['status'] ?></td>
                        <td><?= $anime['episodio_atual'] ?></td>
                    </tr>
                <?php endforeach; ?>
              <?php endif; ?>
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
            <select name="statusAnime" id="statusAnime" class="form-control">
                <option value="Assistindo">Assistindo</option>
                <option value="Em espera">Em espera</option>
                <option value="Finalizado">Finalizado</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="atualizarAnimeUsuario">Atualizar</button>
      </div>
    </div>
  </div>
</div>

<script>
    var tr = document.querySelectorAll('tr');
    var base_url = window.location.origin + "/prjProject/perfil"
    var idAnimeUsuario;

    tr.forEach((el) => {
      el.addEventListener('click', meuID);
    });

    function meuID(e) {
      idAnimeUsuario = e.currentTarget.id
      pegarDadosAnime(e.currentTarget.id, e.currentTarget)
    }

    function pegarDadosAnime(idAnime, tag) {
      $.ajax({
        url : base_url + "/pegarDadosAnime",
        type : 'post',
        data : {
              id : idAnime
        },
      })
      .done(function(data){
        console.log(data);
        $("#modalAnimeMyList").modal("show")
        $("#animeEpisodio").attr("max", tag.getAttribute("episodios"))
        $("#animeEpisodio").val(data.episodio_atual)
        $("#statusAnime").val(data.status)
      })
      .fail(function(jqXHR, textStatus, msg){
        alert("Erro ao buscar anime");
      });
    }

    $("#atualizarAnimeUsuario").click(function() {
      $.ajax({
        url : base_url + "/atualizarAnimeUsuario",
        type : 'post',
        data : {
              id : idAnimeUsuario,
              episodio : $("#animeEpisodio").val(),
              status : $("#statusAnime").val()
        },
      })
      .done(function(data){
        window.location.href = 'listaAnimes'
      })
      .fail(function(jqXHR, textStatus, msg){
        alert("Erro ao atualizar anime");
      });
    })

    $(document).ready(function() {
      $("#animeEpisodio").attr("max")
    }); 
</script>