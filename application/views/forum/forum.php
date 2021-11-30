<nav class="justify-content-between">
    <img src="<?= base_url("application/assets/images/bannerTokyo.png") ?>" alt="banner home" width="100%">
</nav>
<div class="container mt-3">
<div class="main-body p-0">
    <div class="inner-wrapper">
        <!-- Inner sidebar -->
        <div class="inner-sidebar">
            <!-- Inner sidebar header -->
            <div class="inner-sidebar-header justify-content-center">
                <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    NEW DISCUSSION
                </button>
            </div>
            <!-- /Inner sidebar header -->
        </div>
        <!-- /Inner sidebar -->

        <!-- Inner main -->
        <div class="inner-main">
            <!-- Inner main body -->

            <!-- Forum List -->
            <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                <?php if(isset($forums)): ?>
                    <?php foreach($forums as $forum): ?>
                        <div class="card mb-2">
                            <div class="card-body p-2 p-sm-3">
                                <div class="media forum-item">
                                    <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                    
                                    <div class="media-body">
                                        <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body"><?= $forum["titulo"] ?></a></h6>
                                        <p class="text-secondary">
                                            <?= $forum["resenha"] ?>
                                        </p>
                                        <p class="text-muted"><a href="javascript:void(0)"><?= $forum["usuario"] ?></a> replied</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <!-- /Forum List -->
        </div>
        <!-- /Inner main -->
    </div>

    <!-- New Thread Modal -->
    <div class="modal fade" id="threadModal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header d-flex align-items-center bg-primary text-white">
                        <h6 class="modal-title mb-0" id="threadModalLabel">Nova discussao</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" autofocus="" />
                        </div>
                        <div class="form-group">
                            <label for="resenha">Resenha</label>
                            <textarea class="form-control summernote" id="resenha" name="resenha" placeholder="Resenha"></textarea>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="postarResenha">Postar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    var base_url = window.location.origin + "/prjProject/forum"

    $("#postarResenha").click(function() {
      $.ajax({
        url : base_url + "/cadastroForum",
        type : 'post',
        data : {
              titulo : $("#titulo").val(),
              resenha : $("#resenha").val()
        },
      })
      .done(function(data){
        window.location.href = 'listaForum'
      })
      .fail(function(jqXHR, textStatus, msg){
        alert("Erro ao postar resenha");
      });
    })
</script>

<style>
    
    .inner-wrapper {
        position: relative;
        height: calc(100vh - 3.5rem);
        transition: transform 0.3s;
    }
    @media (min-width: 992px) {
        .sticky-navbar .inner-wrapper {
            height: calc(100vh - 3.5rem - 48px);
        }
    }

    .inner-main,
    .inner-sidebar {
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        flex-direction: column;
    }
    .inner-sidebar {
        left: 0;
        width: 235px;
        border-right: 1px solid #cbd5e0;
        background-color: #fff;
        z-index: 1;
    }
    .inner-main {
        right: 0;
        left: 235px;
    }
    .inner-main-footer,
    .inner-main-header,
    .inner-sidebar-footer,
    .inner-sidebar-header {
        height: 3.5rem;
        border-bottom: 1px solid #cbd5e0;
        display: flex;
        align-items: center;
        padding: 0 1rem;
        flex-shrink: 0;
    }
    .inner-main-body,
    .inner-sidebar-body {
        padding: 1rem;
        overflow-y: auto;
        position: relative;
        flex: 1 1 auto;
    }
    .inner-main-body .sticky-top,
    .inner-sidebar-body .sticky-top {
        z-index: 999;
    }
    .inner-main-footer,
    .inner-main-header {
        background-color: #fff;
    }
    .inner-main-footer,
    .inner-sidebar-footer {
        border-top: 1px solid #cbd5e0;
        border-bottom: 0;
        height: auto;
        min-height: 3.5rem;
    }
    @media (max-width: 767.98px) {
        .inner-sidebar {
            left: -235px;
        }
        .inner-main {
            left: 0;
        }
        .inner-expand .main-body {
            overflow: hidden;
        }
        .inner-expand .inner-wrapper {
            transform: translate3d(235px, 0, 0);
        }
    }

    .nav .show>.nav-link.nav-link-faded, .nav-link.nav-link-faded.active, .nav-link.nav-link-faded:active, .nav-pills .nav-link.nav-link-faded.active, .navbar-nav .show>.nav-link.nav-link-faded {
        color: #3367b5;
        background-color: #c9d8f0;
    }

    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #467bcb;
    }
    .nav-link.has-icon {
        display: flex;
        align-items: center;
    }
    .nav-link.active {
        color: #467bcb;
    }
    .nav-pills .nav-link {
        border-radius: .25rem;
    }
    .nav-link {
        color: #4a5568;
    }
    .card {
        box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }
</style>