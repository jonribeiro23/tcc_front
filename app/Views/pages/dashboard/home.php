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
                <h2 class="h3 fw--600"><?= session()->get('nome') ?></h2>
            </div>

            <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
                <p><?= isset($perfil)  ? $perfil->bio : '' ?></p>
                <a href="#bio" data-toggle="modal" data-overlay="0.1">
                    <small class="btn btn-animate">
                        Editar
                    </small>
                </a>
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

                        <?= view('templates/submenu')?>

                        <!-- Profile Details Start -->
                        <div class="profile--details fs--14">
                            <!-- Profile Item Start -->
                            <div class="profile--item">
                                <div class="profile--heading">
                                    <a href="#sobreMim" data-toggle="modal" data-overlay="0.1">
                                        <small class="btn btn-animate">
                                            Editar
                                        </small>
                                    </a>
                                    <h3 class="h4 fw--700 mt--15">
                                        <span class="mr--4">Minhas habilidades</span>
                                        <i class="ml--10 text-primary fa fa-caret-right"></i>
                                    </h3>
                                </div>
                                <div class="profile--info">
                                    <p id="infoSobreMim"><?= isset($perfil)  ? $perfil->habilidades : '' ?></p>
                                </div>
                            </div>
                            <!-- Profile Item End -->

                            <!-- Profile Item Start -->
                            <div class="profile--item">
                                <div class="profile--heading">
                                    <a href="#biografia" data-toggle="modal" data-overlay="0.1">
                                        <small class="btn btn-animate">
                                            Editar
                                        </small>
                                    </a>
                                    <h3 class="h4 fw--700 mt--15">
                                        <span class="mr--4">Biografia</span>
                                        <i class="ml--10 text-primary fa fa-caret-right"></i>
                                    </h3>
                                </div>

                                <div class="profile--info">
                                    <p id="infoBiografia"><?= isset($perfil)  ? $perfil->biografia : '' ?></p>
                                </div>
                            </div>
                            <!-- Profile Item End -->

                            <!-- Profile Item Start -->
                            <div class="profile--item">
                                <div class="profile--heading">
                                    <a href="#contato" data-toggle="modal" data-overlay="0.1">
                                        <small class="btn btn-animate">
                                            Editar
                                        </small>
                                    </a>
                                    <h3 class="h4 fw--700 mt--15">
                                        <span class="mr--4">Contato</span>
                                        <i class="ml--10 text-primary fa fa-caret-right"></i>
                                    </h3>
                                </div>

                                <div class="profile--info">
                                    <table id="tbInfo" class="table">
                                        <tr>
                                            <th class="fw--700 text-darkest">E-mail</th>
                                            <td><a target="_blank" href="<?= session()->get('email') ?>"><?= session()->get('email') ?></a></td>
                                        </tr>
                                        <tr>
                                            <th class="fw--700 text-darkest">Website</th>
                                            <td><a target="_blank" href="<?= isset($perfil)  ? $perfil->website : '' ?>"><?= isset($perfil)  ? $perfil->website : '' ?></a></td>
                                        </tr>
                                        <tr>
                                            <th class="fw--700 text-darkest">Instagram</th>
                                            <td><a target="_blank" href="<?= isset($perfil)  ? $perfil->instagram : '' ?>"><?= isset($perfil)  ? $perfil->instagram : '' ?></a></td>
                                        </tr>
                                        <tr>
                                            <th class="fw--700 text-darkest">YouTube</th>
                                            <td><a target="_blank" href="<?= isset($perfil)  ? $perfil->youtube : '' ?>"><?= isset($perfil)  ? $perfil->youtube : '' ?></a></td>
                                        </tr>
                                        <tr>
                                            <th class="fw--700 text-darkest">Facebook</th>
                                            <td><a target="_blank" href="<?= isset($perfil)  ? $perfil->facebook : '' ?>"><?= isset($perfil)  ? $perfil->facebook : '' ?></a></td>
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

    <!-- Footer Section Start -->
    <footer class="footer--section">
        <!-- Footer Copyright Start -->
        <div class="footer--copyright pt--30 pb--30 bg-darkest">
            <div class="container">
                <div class="text fw--500 fs--14 text-center">
                    <p>Copyright &copy; Grow<span>X</span>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
        <!-- Footer Copyright End -->
    </footer>
    <!-- Footer Section End -->
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