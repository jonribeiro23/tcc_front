<?php $session = \Config\Services::session(); ?>
<!-- Preloader Start -->
<div id="preloader">
    <div class="preloader--inner"></div>
</div>
<!-- Preloader End -->

<!-- Cover Header Start -->
<div class="cover--header pt--80 text-center"
     data-bg-img="<?= base_url('public/assets/img/banner-img/home-version-3/social-media-wide.png') ?>" data-overlay="0.6"
     data-overlay-color="white">
    <div class="container">
        <div class="cover--avatar online" data-overlay="0.3" data-overlay-color="primary">
            <img src="<?= base_url('public/assets/img/cover-header-img/avatar-01.jpg') ?>" alt="">
        </div>
        <?php if (isset($session->mensagem)): ?>
            <div class="widget">
                <h3><?= $session->mensagem ?></h3>
            </div>
        <?php endif ?>

        <div class="cover--user-name">
            <h2 class="h3 fw--600"><?= $instructor[0].' '.$instructor[0] ?></h2>
        </div>

        <?= view('templates/btn-follow-unfollow') ?>


    </div>
</div>
<!-- Cover Header End -->

<!-- Page Wrapper Start -->
<section class="page--wrapper pt--80 pb--20">
    <div class="container">
        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-12 pb--60" data-trigger="stickyScroll">
                <div class="main--content-inner drop--shadow">

                    <?= view('templates/submenu-friend') ?>

                    <!-- Box Items Start -->
                    <div class="box--items">
                        <?php if (isset($cursos)): ?>
                            <div class="row gutter--15 AdjustRow">
                                <?php foreach ($cursos as $curso): ?>
                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Box Item Start -->
                                        <div class="box--item text-center">
                                            <a href="<?= base_url('ver') . '/' . $curso->id ?>" class="img"
                                               data-overlay="0.1">
                                                <img src="<?= base_url('public/assets/img/group-img/01.jpg') ?>" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest bg-primary">
                                                    <i class="fa fa-plane"></i>
                                                </div>

                                                <div class="title">
                                                    <h2 class="h6"><a
                                                                href="<?= base_url('ver/') . '/' . $curso->id ?>"><?= $curso->nome ?></a>
                                                    </h2>
                                                </div>


                                                <div class="action">
                                                    <a href="<?= base_url('ver') . '/' . $curso->id ?>">Entrar<i class="fa ml--10 fa-caret-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Box Item End -->
                                    </div>
                                <?php endforeach ?>
                            </div>
                        <?php else: ?>
                            <h3>Nenhum curso foi criado.</h3>
                        <?php endif ?>
                    </div>
                    <!-- Box Items End -->

                </div>
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

<script src="<?= base_url('public/assets/js/follow-user.js') ?>"></script>