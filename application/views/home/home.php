<img src="<?= base_url("application/assets/images/bannerBoku.png") ?>" alt="banner home" width="100%">

<div class="container">
    <div class="jumbotron mt-5 bg-white">
        <div class="row">
            <div class="col-8">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= base_url("application/assets/images/carrousel1.png") ?>" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url("application/assets/images/carrousel2.png") ?>" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url("application/assets/images/carrousel3.png") ?>" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url("application/assets/images/carrousel4.png") ?>" alt="Fourth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <?php if(isset($forums)): ?>
                    <?php foreach($forums as $index => $forum): ?>
                        <?php if($index < 3): ?>
                            <div class="row mt-4 border">
                                <div class="col-4">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" />   
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body"><?= $forum["titulo"] ?></a></h6>
                                    </div>
                                    <div class="row">
                                        <p class="text-secondary"><?= $forum["resenha"] ?></p>
                                    </div>
                                    <div class="row">
                                        <p ><a href="javascript:void(0)"><?= $forum["usuario"] ?></a> replied</p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="col-12 jumbotron mt-4">
                <h5 class="text-center"><strong>Anime</strong></h5>
                <?php if(isset($animes)): ?>
                    <div class="row">
                    <?php foreach($animes as $index => $anime): ?>
                        <div class="col-4">
                        <?php if($index < 3): ?>
                            <div class="row mt-5">
                                <div class="col-3">
                                    <div class="row">
                                        <img src="<?= base_url($anime['imagem']) ?>" />
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <p><strong><?= $anime['nome_anime'] ?></strong></p>
                                    </div>
                                    <div class="row">
                                        <p style="font-size: 14px;"><?= $anime['qtd_eps'] ?> v??deos</p>
                                    </div>
                                </div>

                            </div>
                            
                        <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row mt-5">
            <!-- <div class="col-8">
                <h5 class="text-center"><strong>Resenhas do F??rum</strong></h5>

                <?php if(isset($forums)): ?>
                    <?php foreach($forums as $index => $forum): ?>
                        <?php if($index < 3): ?>
                            <div class="row mt-4 border">
                                <div class="col-4">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" />   
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body"><?= $forum["titulo"] ?></a></h6>
                                    </div>
                                    <div class="row">
                                        <p class="text-secondary"><?= $forum["resenha"] ?></p>
                                    </div>
                                    <div class="row">
                                        <p ><a href="javascript:void(0)"><?= $forum["usuario"] ?></a> replied</p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                
            </div> -->
            <div class="col-12 jumbotron">
                <h5 class="text-center"><strong>Mang??</strong></h5>
                <?php if(isset($mangas)): ?>
                    <div class="row">
                        <?php foreach($mangas as $index => $manga): ?>
                            <div class="col-4">
                            <?php if($index < 3): ?>
                                <div class="row mt-5">
                                    <div class="col-3">
                                        <div class="row">
                                            <img src="<?= base_url($manga['imagem']) ?>" />
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="row">
                                        <p><strong><?= $manga['nome_manga'] ?></strong></p>
                                        </div>
                                        <div class="row">
                                        <p style="font-size: 14px;"><?= $manga['qtd_caps'] ?> cap??tulos</p>
                                        </div>
                                    </div>

                                </div>
                            <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h5 class="text-center"><strong>??ltimas Not??cias</strong></h5>
                <div class="row mt-4 jumbotron">
                    <div class="col-4">
                        <img src="<?= base_url("application/assets/images/noticias/mob.png") ?>"/>   
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <a href="https://www.crunchyroll.com/pt-br/anime-news/2021/10/19-1/terceira-temporada-de-mob-psycho-100-oficialmente-anunciada"><strong>Terceira temporada de Mob Psycho 100 ?? oficialmente anunciada</strong></a>
                        </div>
                    <div class="row">
                        <p style="font-size: 14px;">Ap??s uma longa contagem regressiva, o Twitter oficial de Mob Psycho FINALMENTE anunciou a terceira temporada do anime! Confira todos detalhes ap??s o clique!</p>
                    </div>
                </div>
                <div class="row mt-4 jumbotron">
                    <div class="col-4">
                        <img src="<?= base_url("application/assets/images/noticias/deathnote.png") ?>" />   
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <a href="https://www.crunchyroll.com/pt-br/anime-feature/2021/10/18/especial-5-motivos-pelos-quais-death-note-um-timo-anime"><strong>ESPECIAL: 5 motivos pelos quais Death Note ?? um ??timo anime</strong></a>
                        </div>
                    <div class="row">
                        <p style="font-size: 14px;">Confira cinco motivos que tornam Death Note uma s??rie incr??vel ap??s o clique!</p>
                    </div>
                </div>
                <div class="row mt-4 jumbotron">
                    <div class="col-4">
                        <img src="<?= base_url("application/assets/images/noticias/awards.jpg") ?>" />   
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <a href="https://www.crunchyroll.com/pt-br/anime-news/2021/10/13/faa-sua-voz-ser-ouvida-indique-quem-voc-gostaria-de-ver-como-jurado-no-anime-awards-2022"><strong>
Fa??a sua voz ser ouvida! Indique quem voc?? gostaria de ver como jurado no Anime Awards 2022</strong></a>
                        </div>
                    <div class="row">
                        <p style="font-size: 14px;">Todo ano, o Anime Awards re??ne f??s do mundo inteiro para celebrar esse meio que todos amamos: o anime. Ano passado, tivemos incr??veis 15 milh??es de votos, o que tornou a edi????o de 2021 a maior de todas at?? agora! A equipe da Crunchyroll j?? est?? trabalhando duro no Anime Awards 2022, mas antes de divulgarmos qualquer informa????o sobre o evento do pr??ximo ano, gostar??amos que dar uma oportunidade extra para os nossos f??s participarem</p>
                    </div>
                </div>
                <div class="row mt-4 jumbotron">
                    <div class="col-4">
                        <img src="<?= base_url("application/assets/images/noticias/Eien.png") ?>" />   
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <a href="https://www.crunchyroll.com/pt-br/anime-news/2021/10/20/com-kenji-kamiyama-na-direo-mais-informaes-sobre-eien-no-831-so-reveladas"><strong>Com Kenji Kamiyama na dire????o, mais informa????es sobre Eien no 831 s??o reveladas</strong></a>
                        </div>
                    <div class="row">
                        <p style="font-size: 14px;">Como revelado em agosto, Kenji Kamiyama (Ghost in the Shell: Stand Alone Complex) est?? trabalhando em um novo anime que deve estrear em janeiro de 2022 em comemora????o os 30 anos do WOWOW, marca alcan??ada no ??ltimo m??s de abril. Agora, o site oficial de Eien no 831 divulgou novas informa????es sobre o projeto, al??m de artes dos personagens principais e um pouco mais de sua hist??ria</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
