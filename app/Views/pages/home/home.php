

<!-- Preloader Start -->
<!--<div id="preloader">-->
<!--    <div class="preloader--inner"></div>-->
<!--</div>-->
<!-- Preloader End -->
<?php $session = \Config\Services::session(); ?>
<!-- Banner Section Start -->
<section class="banner--section">
    <!-- Banner Slider Start -->
    <div class="banner--slider owl-carousel" data-owl-loop="false">
        <!-- Banner Item Start -->
        <div class="banner--item" data-bg-img="<?= base_url('public/assets/img/banner-img/home-version-3/social-media-.png') ?>" data-overlay="0.5">
            <div class="vc--parent">
                <div class="vc--child">
                    <div class="container">
                        <div class="row row--md-vc">
                            <div class="col-md-7">
                                <!-- Banner Content Start -->
                                <div class="banner--content pt--70 pb--80">
                                    <div class="title">
                                        <h1 class="h2 text-white">Bem Vindo a Comunidade</h1>
                                    </div>

                                    <div class="sub-title">
                                        <h2 class="h1 text-white">Conecte, compartilhe e engaje</h2>
                                    </div>

                                    <div class="desc fs--16">
                                        <p>Este é um espaço para aprender e ensinar sobre Marketing Digital. Assista cursos criados por outro usuários ou crie você mesmo seu próprio curso.</p>
                                    </div>

<!--                                    <div class="action text-uppercase">-->
<!--                                        <a href="#" class="btn btn-white">Learn More</a>-->
<!--                                        <a href="#" class="btn btn-primary">See Members</a>-->
<!--                                    </div>-->
                                </div>
                                <!-- Banner Content End -->
                            </div>

                            <?php if(isset($session->mensagem)): ?>
                            <div class="widget">
                                <h3><?= $session->mensagem ?></h3>
                            </div>
                            <?php endif ?>

                            <div class="col-md-4 col-md-offset-1 col-xs-8 col-xs-offset-2 col-xxs-12">
                                <!-- Widget Start -->
                                <div class="widget">
                                    <h2 class="h4 fw--700 widget--title">Login</h2>

                                    <!-- Buddy Finder Widget Start -->
                                    <div class="buddy-finder--widget">
                                        <form action="<?= base_url('logar') ?>" method="post">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>
                                                            <span class="text-darker ff--primary fw--500">Email</span>
                                                        </label>

                                                        <input class="form-control form-sm" type="text" name="email">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>
                                                            <span class="text-darker ff--primary fw--500">Senha</span>
                                                        </label>

                                                        <input class="form-control form-sm" type="password" name="senha">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-primary">Logar</button>
                                                    </div>
                                                    <div class="col">
                                                        <a href="<?= base_url('cadastrar') ?>">Cadastrar.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                   <!-- Buddy Finder Widget End -->
                                </div>
                                <!-- Widget End -->
                         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Item End -->
    </div>
    <!-- Banner Slider End -->
</section>
