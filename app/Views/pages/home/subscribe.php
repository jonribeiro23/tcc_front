

<!-- Preloader Start -->
<!--<div id="preloader">-->
<!--    <div class="preloader--inner"></div>-->
<!--</div>-->
<!-- Preloader End -->

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

                                </div>
                                <!-- Banner Content End -->
                            </div>

                            <div class="col-md-4 col-md-offset-1 col-xs-8 col-xs-offset-2 col-xxs-12">
                                <!-- Widget Start -->

                                <?php if(isset($validation)): ?>
                                    <div class="widget">
                                        <?= $validation->listErrors() ?>
                                    </div>
                                <?php endif ?>

                                <div class="widget">
                                    <h2 class="h4 fw--700 widget--title">Cadastrar</h2>

                                    <!-- Buddy Finder Widget Start -->
                                    <div class="buddy-finder--widget">
                                        <form action="<?= base_url('cadastrar') ?>" method="post">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nome">
                                                            <span class="text-darker ff--primary fw--500">Nome</span>
                                                        </label>

                                                        <input class="form-control form-sm" type="text" name="nome" id="nome" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="sobrenome">
                                                            <span class="text-darker ff--primary fw--500">Sobrenome</span>
                                                        </label>

                                                        <input class="form-control form-sm" type="text" name="sobrenome" id="sobrenome" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">
                                                            <span class="text-darker ff--primary fw--500">Email</span>
                                                        </label>

                                                        <input class="form-control form-sm" type="email" name="email" id="email" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="senha">
                                                            <span class="text-darker ff--primary fw--500">Senha</span>
                                                        </label>
                                                        <input class="form-control form-sm" type="password" name="senha" id="senha" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="csenha">
                                                            <span class="text-darker ff--primary fw--500">Confirmar Senha</span>
                                                        </label>
                                                        <input class="form-control form-sm" type="password" name="csenha" id="csenha" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>
                                                            <span class="text-darker ff--primary fw--500">Eu sou</span>

                                                            <select name="sexo" class="form-control form-sm" data-trigger="selectmenu">
                                                                <option value="homem">Homem</option>
                                                                <option value="mulher">Mulher</option>
                                                                <option value="outro">Outro</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                                    </div>
                                                    <div class="col">
                                                        <a href="<?= base_url().'/' ?>">Já sou cadastrado.</a>
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
<!-- Banner Section End -->
