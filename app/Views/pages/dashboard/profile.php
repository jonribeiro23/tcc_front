<?php $session = \Config\Services::session(); ?>
<!-- Preloader Start -->
<div id="preloader">
    <div class="preloader--inner"></div>
</div>
<!-- Preloader End -->

    <!-- Cover Header Start -->
    <div class="cover--header pt--80 text-center" data-bg-img="<?= base_url('public/assets/img/banner-img/home-version-3/social-media-wide.png') ?>" data-overlay="0.6" data-overlay-color="white">
        <div class="container">
            <div class="cover--avatar online" data-overlay="0.3" data-overlay-color="primary">
                <img src="<?= base_url('public/assets/img/cover-header-img/avatar-01.jpg') ?>" alt="">
            </div>
            <?php if(isset($session->mensagem)): ?>
                <div class="widget">
                    <h3><?= $session->mensagem ?></h3>
                </div>
            <?php endif ?>

            <div class="cover--user-name">
                <h2 class="h3 fw--600"><?= $perfil[0]->nome ?></h2>
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

                        <!-- Profile Details Start -->
                        <div class="profile--details fs--14">
                            <!-- Profile Item Start -->
                            <div class="profile--item">
                                <div class="profile--heading">
                                    <h3 class="h4 fw--700 mt--15">
                                        <span class="mr--4">Minhas habilidades</span>
                                        <i class="ml--10 text-primary fa fa-caret-right"></i>
                                    </h3>
                                </div>
                                <div class="profile--info">
                                    <p id="infoSobreMim"><?= $perfil[0]->habilidades ?></p>
                                </div>
                            </div>
                            <!-- Profile Item End -->

                            <!-- Profile Item Start -->
                            <div class="profile--item">
                                <div class="profile--heading">
                                    <h3 class="h4 fw--700 mt--15">
                                        <span class="mr--4">Biografia</span>
                                        <i class="ml--10 text-primary fa fa-caret-right"></i>
                                    </h3>
                                </div>

                                <div class="profile--info">
                                    <p id="infoBiografia"><?= $perfil[0]->biografia ?></p>
                                </div>
                            </div>
                            <!-- Profile Item End -->

                            <!-- Profile Item Start -->
                            <div class="profile--item">
                                <div class="profile--heading">
                                    <h3 class="h4 fw--700 mt--15">
                                        <span class="mr--4">Contato</span>
                                        <i class="ml--10 text-primary fa fa-caret-right"></i>
                                    </h3>
                                </div>

                                <div class="profile--info">
                                    <table id="tbInfo" class="table">
                                        <tr>
                                            <th class="fw--700 text-darkest">E-mail</th>
                                            <td><a target="_blank"><?= $perfil[0]->email ?></a></td>
                                        </tr>
                                        <tr>
                                            <th class="fw--700 text-darkest">Website</th>
                                            <td><a target="_blank" href="<?= $perfil[0]->website ?>"><?= $perfil[0]->website ?></a></td>
                                        </tr>
                                        <tr>
                                            <th class="fw--700 text-darkest">Instagram</th>
                                            <td><a target="_blank" href="<?= $perfil[0]->instagram ?>"><?= $perfil[0]->instagram ?></a></td>
                                        </tr>
                                        <tr>
                                            <th class="fw--700 text-darkest">YouTube</th>
                                            <td><a target="_blank" href="<?= $perfil[0]->youtube ?>"><?= $perfil[0]->youtube ?></a></td>
                                        </tr>
                                        <tr>
                                            <th class="fw--700 text-darkest">Facebook</th>
                                            <td><a target="_blank" href="<?= $perfil[0]->facebook ?>"><?= $perfil[0]->facebook ?></a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- Profile Item End -->
                        </div>
                        <!-- Profile Details End -->
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
<?= view('templates/edit_modal')?>
<!--Modal End-->

<!-- Back To Top Button Start -->
<div id="backToTop">
    <a href="#" class="btn"><i class="fa fa-caret-up"></i></a>
</div>
<!-- Back To Top Button End -->

<script src="<?= base_url('public/assets/js/follow-user.js') ?>"></script>