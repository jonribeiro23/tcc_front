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
            <h2 class="h3 fw--600"><?= session()->get('nome') ?></h2>
        </div>

        <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
            <p><?= isset($perfil) ? $perfil->bio : '' ?></p>
        </div>
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

                    <?= view('templates/submenu') ?>

                    <form action="#">
                        <input id="searchPeople" oninput="ajaxSearch()" type="text" name="search" placeholder="I’m looking for..." class="form-control" required>
                    </form>

                    <!-- Member Items Start -->
                    <div class="member--items">
                        <div id="rowOfPeople" class="row gutter--15 AdjustRow">



                        </div>
                    </div>
                    <!-- Member Items End -->

                </div>
            </div>
            <!-- Main Content End -->


        </div>
    </div>
</section>
<!-- Page Wrapper End -->

</div>
<!-- Wrapper End -->

<!--Modal-->
<?= view('templates/edit_modal') ?>
<!--Modal End-->

<!-- Back To Top Button Start -->
<div id="backToTop">
    <a href="#" class="btn"><i class="fa fa-caret-up"></i></a>
</div>
<!-- Back To Top Button End -->

<script src="<?= base_url('public/assets/js/people.js') ?>"></script>
<script src="<?= base_url('public/assets/js/search-people.js') ?>"></script>