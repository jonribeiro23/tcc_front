<!-- Media Modal Start -->
<div class="media--modal type--video modal fade" id="assistir">
    <div class="modal-dialog">
        <div class="row gutter--0">
            <div class="col-md-8">
                <!-- Media Video Start -->
                <div class="media--video embed-responsive embed-responsive-16by9">
                    <iframe id="iframeVideo" src="https://www.youtube.com/embed/YE7VzlLtp-4?showinfo=0&amp;controls=0&amp;rel=0&amp;wmode=transparent"></iframe>

                    <p class="figcaption fs--14 fw--700 text-white">Big Buck Bunny</p>
                </div>
                <!-- Media Video End -->
            </div>

            <div class="col-md-4">
                <!-- Media Details Start -->
                <div class="media--details">
                    <!-- Media Close Button Start -->
                    <button type="button" class="close btn-link" data-dismiss="modal">&times;</button>
                    <!-- Media Close Button End -->

                    <!-- Media Author Start -->
                    <div class="media--author clearfix">
                        <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                            <img src="img/activity-img/avatar-01.jpg" alt="">
                        </div>

                        <div class="media--author-info ov--h">
                            <p class="name fs--14 fw--700 text-darkest">Eileen K. Ruiz</p>
                            <p class="date">Yeasterday at 08:20 am<i class="ml--8 fa fa-globe"></i></p>
                        </div>
                    </div>
                    <!-- Media Author End -->

                    <!-- Media Meta Start -->
                    <div class="media--meta">
                        <ul class="nav">
                            <li>
                                <a href="#">
                                    <i class="bg-primary text-white mr--6 fa fa-hand-o-right"></i>
                                    <span>5k</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bg-primary text-white mr--6 fa fa-comment-o"></i>
                                    <span>Show All 26 Comments</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Media Meta End -->

                    <?php $uri = service('uri'); ?>
                    <div class="media--comments">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <h5>Comentar</h5>
                            </div>
                            <div class="form-group">
                                <input id="class_id" type="hidden", value="">
                                <textarea id="comment_id" name="message" placeholder="Insira seu coment??rio aqui" class="form-control" required></textarea>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <button type="button" class="btn btn-primary mt--10" onclick="postComment('<?= $uri->getSegment(2) ?>')">Publicar</button>
                        </div>
                    </div>

                    <!-- Media Comments Start -->
                    <div id="boxComments" class="media--comments">

                        <!-- Media Comment Start -->
                        <div class="media--comment">
                            <!-- Media Author Start -->
                            <div class="media--author clearfix">

                                <div class="media--author-info ov--h">
                                    <p class="name"><a href="#" class="btn-link">Samantha B. Beatty</a> Replied</p>
                                    <p class="date"><i class="mr--8 fa fa-clock-o"></i>Yeasterday at 08:20 am</p>

                                    <!-- Media Comment Content Start -->
                                    <div class="media--comment-content">
                                        <p>Love It..... <span style="color: #ec407a"><i class="fa fa-heart"></i> <i class="fa fa-heart"></i> <i class="fa fa-heart"></i></span></p>
                                    </div>
                                    <!-- Media Comment Content End -->
                                </div>
                            </div>
                            <!-- Media Author End -->
                        </div>
                        <!-- Media Comment End -->

                    </div>
                    <!-- Media Comments End -->


                    <!-- Media All Comments Start -->
                    <div class="media--all-comments text-center">
                        <a href="#" class="btn-link">Show all comments</a>
                    </div>
                    <!-- Media All Comments End -->
                </div>
                <!-- Media Details End -->
            </div>
        </div>
    </div>
</div>
<!-- Media Modal End -->

<script>
    function getVideo(video){
        let href = document.querySelector('#iframeVideo')
        let complemento = "?showinfo=0&amp;controls=0&amp;rel=0&amp;wmode=transparent"
        let video_link = video.split('/')
        let video_id = video_link[3].replace('watch?v=', '')
        let link = "https://www.youtube.com/embed/" + video_id + "?showinfo=0&amp;controls=0&amp;rel=0&amp;wmode=transparent"
        href.setAttribute('src', link)
    }
</script>