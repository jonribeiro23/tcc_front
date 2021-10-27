<?php $session = \Config\Services::session(); ?>
<!-- Page Header Start -->
<div class="page--header pt--60 pb--60 text-center" data-bg-img="<?= base_url('public/assets/img/banner-img/home-version-3/video-banner.png') ?>" data-overlay="0.85">
    <div class="container">
        <div class="title">
            <h2 class="h1 text-white">Meus Cursos</h2>
        </div>

        <ul class="breadcrumb text-gray ff--primary">
            <li><a href="home-1.html" class="btn-link">Home</a></li>
            <li class="active"><span class="text-primary">Meus Cursos</span></li>
        </ul>
    </div>
</div>
<!-- Page Header End -->
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 mt--20" align="center">
        <?php if(isset($session->mensagem)): ?>
            <div class="widget">
                <h3><?= $session->mensagem ?></h3>
            </div>
        <?php endif ?>
    </div>
    <div class="col-md-4"></div>
</div>
<!-- Page Wrapper Start -->
<section class="page--wrapper pt--80 pb--20">
    <div class="container">
        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-12 pb--60">
                <div class="main--content-inner">
                    <!-- Filter Nav Start -->
                    <div class="filter--nav pb--30 clearfix">
                        <?php if(isset($cursos)): ?>
                        <div class="filter--link float--left">
                            <h2 class="h4">Cursos : <?= count($cursos) ?></h2>
                        </div>
                        <?php endif; ?>

                        <div class="filter--options float--right ml--10">
                            <a href="#curso" data-toggle="modal" data-overlay="0.1">
                                <button class="btn btn-animate">Criar curso</button>
                            </a>
                        </div>

                    </div>
                    <!-- Filter Nav End -->

                    <!-- Box Items Start -->
                    <div class="box--items">
                        <?php if(isset($cursos)): ?>
                            <div class="row gutter--15 AdjustRow">
                                <?php foreach ($cursos as $curso): ?>
                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Box Item Start -->
                                        <div class="box--item text-center">
                                            <a href="<?= base_url('curso').'/'.$curso->id_curso ?>" class="img" data-overlay="0.1">
                                                <img src="<?= base_url('public/assets/img/group-img/01.jpg') ?>" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest bg-primary">
                                                    <i class="fa fa-plane"></i>
                                                </div>

                                                <div class="title">
                                                    <h2 class="h6"><a href="<?= base_url('curso/').'/'.$curso->id_curso ?>"><?= $curso->nome_curso ?></a></h2>
                                                </div>

<!--                                                <div class="meta">-->
<!--                                                    <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>-->
<!--                                                    <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>-->
<!--                                                </div>-->

                                                <div class="desc text-darker">
                                                    <p><?= $curso->descricao ?></p>
                                                </div>

                                                <div class="action">
                                                    <a href="<?= base_url('curso').'/'.$curso->id_curso ?>">Entrar<i class="fa ml--10 fa-caret-right"></i></a>
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

                    <!-- Page Count Start -->
<!--                    <div class="page--count pt--30">-->
<!--                        <label class="ff--primary fs--14 fw--500 text-darker">-->
<!--                            <span>Viewing</span>-->
<!---->
<!--                            <a href="#" class="btn-link"><i class="fa fa-caret-left"></i></a>-->
<!--                            <input type="number" name="page-count" value="01" class="form-control form-sm">-->
<!--                            <a href="#" class="btn-link"><i class="fa fa-caret-right"></i></a>-->
<!---->
<!--                            <span>of 28</span>-->
<!--                        </label>-->
<!--                    </div>-->
                    <!-- Page Count End -->
                </div>
            </div>
            <!-- Main Content End -->
        </div>
    </div>
</section>
<!-- Page Wrapper End -->


<?php echo view('templates/create_course_modal')?>
