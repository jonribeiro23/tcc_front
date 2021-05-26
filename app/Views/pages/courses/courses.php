<?php $session = \Config\Services::session(); ?>
<!-- Page Header Start -->
<div class="page--header pt--60 pb--60 text-center" data-bg-img="<?= base_url('public/assets/img/page-header-img/bg.jpg') ?>" data-overlay="0.85">
    <div class="container">
        <div class="title">
            <h2 class="h1 text-white">Groups</h2>
        </div>

        <ul class="breadcrumb text-gray ff--primary">
            <li><a href="home-1.html" class="btn-link">Home</a></li>
            <li class="active"><span class="text-primary">Groups</span></li>
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
                        <div class="filter--link float--left">
                            <h2 class="h4">All Groups : 25</h2>
                        </div>

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
                                            <a href="group-home.html" class="img" data-overlay="0.1">
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
                                                    <p><?= $curso->descricao ?>></p>
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
                    <div class="page--count pt--30">
                        <label class="ff--primary fs--14 fw--500 text-darker">
                            <span>Viewing</span>

                            <a href="#" class="btn-link"><i class="fa fa-caret-left"></i></a>
                            <input type="number" name="page-count" value="01" class="form-control form-sm">
                            <a href="#" class="btn-link"><i class="fa fa-caret-right"></i></a>

                            <span>of 28</span>
                        </label>
                    </div>
                    <!-- Page Count End -->
                </div>
            </div>
            <!-- Main Content End -->
        </div>
    </div>
</section>
<!-- Page Wrapper End -->

<!-- Footer Section Start -->
<footer class="footer--section">
    <!-- Footer Widgets Start -->
    <div class="footer--widgets pt--70 pb--20 bg-lightdark" data-bg-img="img/footer-img/footer-widgets-bg.png">
        <div class="container">
            <div class="row AdjustRow">
                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">About Us</h2>

                        <!-- Text Widget Start -->
                        <div class="text--widget">
                            <p>Ipsum is simply dummy text of the printing indusLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                        <!-- Text Widget End -->
                    </div>
                    <!-- Widget End -->

                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Subscribe To Our Newsletter</h2>

                        <!-- Newsletter Widget Start -->
                        <div class="newsletter--widget style--1" data-form="validate">
                            <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank">
                                <div class="input-group">
                                    <input type="email" name="EMAIL" placeholder="Enter your emil address" class="form-control" autocomplete="off" required>

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn-link"><i class="fa fa-send-o"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Newsletter Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Recent Post</h2>

                        <!-- Recent Posts Widget Start -->
                        <div class="recent-posts--widget">
                            <ul class="nav">
                                <li>
                                    <p class="date fw--300">
                                        <a href="#"><i class="fa mr--8 fa-file-text-o"></i>19 Jan 2017</a>
                                    </p>
                                    <p class="title fw--700">
                                        <a href="blog-details.html">I look at you and see the rest of my life in front</a>
                                    </p>
                                </li>
                                <li>
                                    <p class="date fw--300">
                                        <a href="#"><i class="fa mr--8 fa-file-text-o"></i>19 Jan 2017</a>
                                    </p>
                                    <p class="title fw--700">
                                        <a href="blog-details.html">If I know what love is, it is because of you</a>
                                    </p>
                                </li>
                                <li>
                                    <p class="date fw--300">
                                        <a href="#"><i class="fa mr--8 fa-file-text-o"></i>19 Jan 2017</a>
                                    </p>
                                    <p class="title fw--700">
                                        <a href="blog-details.html">At the touch of love everyone becomes a poet</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- Recent Posts Widget End -->
                    </div>
                    <!-- Widget End -->

                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Tags</h2>

                        <!-- Tags Widget Start -->
                        <div class="tags--widget">
                            <ul class="nav">
                                <li><a href="#">BuddyPress</a></li>
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">Music</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">WordPress</a></li>
                            </ul>
                        </div>
                        <!-- Tags Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Some of Catagories</h2>

                        <!-- Nav Widget Start -->
                        <div class="nav--widget">
                            <ul class="nav">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">Social Media</span>
                                        <span class="count">(26)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">Business Studies</span>
                                        <span class="count">(06)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">Technology</span>
                                        <span class="count">(34)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav Widget End -->
                    </div>
                    <!-- Widget End -->

                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">From Archives</h2>

                        <!-- Nav Widget Start -->
                        <div class="nav--widget">
                            <ul class="nav">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar-o"></i>
                                        <span class="text">Jan - July 2017</span>
                                        <span class="count">(86)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar-o"></i>
                                        <span class="text">Jan - Dce 2016</span>
                                        <span class="count">(328)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar-o"></i>
                                        <span class="text">Jan - Dec 2015</span>
                                        <span class="count">(427)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Forums</h2>

                        <!-- Links Widget Start -->
                        <div class="links--widget">
                            <ul class="nav">
                                <li><a href="sub-forums.html">User Interface Design</a></li>
                                <li><a href="sub-forums.html">Front-End Engineering</a></li>
                                <li><a href="sub-forums.html">Web Development</a></li>
                                <li><a href="sub-forums.html">Social Media Marketing</a></li>
                                <li><a href="sub-forums.html">Content Marketing</a></li>
                            </ul>
                        </div>
                        <!-- Links Widget End -->
                    </div>
                    <!-- Widget End -->

                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Useful Links</h2>

                        <!-- Links Widget Start -->
                        <div class="links--widget">
                            <ul class="nav">
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Membership Levels</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Links Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Widgets End -->

    <!-- Footer Extra Start -->
    <div class="footer--extra bg-darker pt--30 pb--40 text-center">
        <div class="container">
            <!-- Widget Start -->
            <div class="widget">
                <h2 class="h4 fw--700 widget--title">Recent Active Members</h2>

                <!-- Recent Active Members Widget Start -->
                <div class="recent-active-members--widget style--2">
                    <div class="owl-carousel" data-owl-items="12" data-owl-nav="true" data-owl-speed="1200" data-owl-responsive='{"0": {"items": "3"}, "481": {"items": "6"}, "768": {"items": "8"}, "992": {"items": "12"}}'>
                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/01.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/02.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/03.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/04.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/05.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/06.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/07.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/08.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/09.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/10.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/11.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/12.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/13.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- Recent Active Members Widget End -->
            </div>
            <!-- Widget End -->
        </div>
    </div>
    <!-- Footer Extra End -->

    <!-- Footer Copyright Start -->
    <div class="footer--copyright pt--30 pb--30 bg-darkest">
        <div class="container">
            <div class="text fw--500 fs--14 text-center">
                <p>Copyright &copy; Soci<span>fly</span>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer Copyright End -->
</footer>
<!-- Footer Section End -->

<?php echo view('templates/create_course_modal')?>
