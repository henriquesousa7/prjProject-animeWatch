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
                </tr>
            </thead>
            <tbody>
            <?php if(isset($mangas)): ?>
                <?php foreach($mangas as $manga): ?>
                    <tr class="text-center" id="<?= $manga['manga_usuario_id'] ?>" capitulos="<?= $manga['qtd_caps'] ?>">
                        <td><img src="<?= base_url($manga['imagem']) ?>" /></td>
                        <td><?= $manga['nome_manga'] ?></td>
                        <td><?= $manga['genero_manga'] ?></td>
                        <td><?= $manga['qtd_caps'] ?></td>
                        <td><?= $manga['status'] ?></td>
                        <td><?= $manga['capitulo_atual'] ?></td>
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
            <label for="mangaCapitulo" class="col-form-label">Capitulo Visto:</label>
            <input type="number" class="form-control" id="mangaCapitulo" name="mangaCapitulo" min=0>
          </div>
          <div class="form-group">
            <select name="statusManga" id="statusManga" class="form-control">
                <option value="Lendo">Lendo</option>
                <option value="Em espera" selected>Em espera</option>
                <option value="Finalizado">Finalizado</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="atualizarMangaUsuario">Atualizar</button>
      </div>
    </div>
  </div>
</div>

<script>
    var tr = document.querySelectorAll('tr');
    var base_url = window.location.origin + "/prjProject/perfil"
    var idMangaUsuario;

    tr.forEach((el) => {
      el.addEventListener('click', meuID);
    });

    function meuID(e) {
      idMangaUsuario = e.currentTarget.id
      pegarDadosManga(e.currentTarget.id, e.currentTarget)
    }

    function pegarDadosManga(idManga, tag) {
      $.ajax({
        url : base_url + "/pegarDadosManga",
        type : 'post',
        data : {
              id : idManga
        },
      })
      .done(function(data){
        console.log(data);
        $("#mangaCapitulo").attr("max", tag.getAttribute("capitulos"))
        $("#mangaCapitulo").val(JSON.parse(data).capitulo_atual)
        $("#statusManga").val(JSON.parse(data).status)
        $("#modalMangaMyList").modal("show")
      })
      .fail(function(jqXHR, textStatus, msg){
        alert("Erro ao buscar anime");
      });
    }

    $("#atualizarMangaUsuario").click(function() {
      $.ajax({
        url : base_url + "/atualizarMangaUsuario",
        type : 'post',
        data : {
              id : idMangaUsuario,
              capitulo : $("#mangaCapitulo").val(),
              status : $("#statusManga").val()
        },
      })
      .done(function(data){
        window.location.href = 'listaMangas'
      })
      .fail(function(jqXHR, textStatus, msg){
        alert("Erro ao atualizar manga");
      });
    })

    $(document).ready(function() {
      $("#mangaCapitulo").attr("max")
    }); 

</script>