<?php $session = \Config\Services::session(); ?>
<?php $uri = service('uri'); ?>
<!-- Preloader Start -->
<div id="preloader">
    <div class="preloader--inner"></div>
</div>
<!-- Preloader End -->

<!-- Page Header Start -->
<div class="page--header pt--60 pb--60 text-center"
     data-bg-img="<?= base_url('public/assets/img/page-header-img/bg.jpg') ?>" data-overlay="0.85">
    <div class="container">
        <?php if (isset($curso)): ?>
            <div class="title">
                <h2 class="h1 text-white"><?= $curso[0]->nome_curso ?></h2>
            </div>

            <div class="cover--user-desc fw--400 fs--18 fstyle--i text-grey">
                <p>Criado por: <?= $instructor ?></p>
            </div>

            <br>

            <div class="cover--user-desc fw--400 fs--18 fstyle--i text-grey">
                <p><?= $curso[0]->descricao ?></p>
            </div>
        <?php endif ?>
    </div>
</div>
<!-- Page Header End -->


<!-- Page Wrapper Start -->
<section class="page--wrapper pt--80 pb--20">
    <div class="container">
        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-12 pb--60" data-trigger="stickyScroll">
                <div class="main--content-inner drop--shadow">


                    <?php if (isset($curso[0]->aulas)): ?>
                        <!-- Filter Nav Start -->
                        <div class="filter--nav pb--50 clearfix">
                            <div class="filter--links float--left">
                                <ul class="nav ff--primary">
                                    <li class="active"><a href="#">Total: <?= count($curso[0]->aulas) ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Filter Nav End -->
                    <?php endif ?>

                    <?php if($isSubscribed == 1): ?>
                    <div class="filter--options float--right ml--10">
                        <a data-toggle="modal" data-overlay="0.1">
                            <button id="subscribe-on-course" onclick="unsubscribe('<?= $uri->getSegment(2) ?>')" class="btn btn-danger">Desinscrever-se</button>
                        </a>
                    </div>
                    <?php else: ?>
                    <div class="filter--options float--right ml--10">
                        <a data-toggle="modal" data-overlay="0.1">
                            <button id="subscribe-on-course" onclick="subscribeOnCourse('<?= $uri->getSegment(2) ?>')" class="btn btn-animate">Inscrever-se</button>
                        </a>
                    </div>
                    <?php endif ?>

                    <!-- Gallery Header Start -->
                    <div class="gallery--header pb--15 clearfix">
                        <div class="gallery--title float--left">
                            <h3 class="h3 fw--500 text-default">Aulas</h3>
                        </div>
                    </div>
                    <!-- Gallery Header End -->

                    <?php if (isset($curso[0]->aulas)): ?>
                    <!-- Gallery Items Start -->
                    <div class="gallery--items">
                        <div class="row gutter--15 AdjustRow">
                            <?php if ($curso[0]->aulas): ?>
                                <?php foreach ($curso[0]->aulas as $aula): ?>
                                    <div class="col-sm-3 col-xs-4 col-xxs-6 pt--15">
                                        <!-- Gallery Item Start -->
                                        <div class="box--item text-center pt--20 pb--20 ">
                                            <!--                                            <img src="-->
                                            <? //= base_url('public/assets/img/gallery-img/thumb-01.jpg') ?><!--" alt="">-->

                                            <div class="title">
                                                <h2 class="h6"><?= $aula->nome_aula ?></h2>
                                            </div>

                                            <div class="desc text-darker">
                                                <p><?= $aula->descricao_aula ?>></p>
                                            </div>

                                            <div class="action">
                                                <a href="#assistir" data-toggle="modal" data-overlay="0.1"
                                                   onclick="getVideo('<?= $aula->link_aula ?>', '<?= $aula->id_aula ?>', '<?= $uri->getSegment(2) ?>')">
                                                    <button class="btn btn-apple">Assistir<i
                                                                class="fa ml--10 fa-caret-right"></i></button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>
                                <?php endforeach ?>
                            <?php endif ?>

                            <?php else: ?>
                                <h3>Nenhuma aula cadastrada.</h3>
                            <?php endif ?>
                        </div>
                    </div>
                    <!-- Gallery Items End -->
                </div>

                <!-- Load More Button Start -->
                <!--                <div class="load-more--btn pt--30 text-center">-->
                <!--                    <a href="#" class="btn btn-animate">-->
                <!--                        <span>See More Media<i class="fa ml--10 fa-caret-right"></i></span>-->
                <!--                    </a>-->
                <!--                </div>-->
                <!-- Load More Button End -->
            </div>
            <!-- Main Content End -->
        </div>
    </div>
</section>
<!-- Page Wrapper End -->


</div>
<!-- Wrapper End -->

<!-- Back To Top Button Start -->
<div id="backToTop">
    <a href="#" class="btn"><i class="fa fa-caret-up"></i></a>
</div>
<!-- Back To Top Button End -->

<script src="<?= base_url('public/assets/js/subscribe.js') ?>"></script>
