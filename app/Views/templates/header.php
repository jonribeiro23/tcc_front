<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>SociFly - Multipurpose Social Network HTML5 Template</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700%7CRoboto:300,400,400i,500,700">

    <!-- ==== Plugins Bundle ==== -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/plugins.min.css') ?>">

    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css') ?>">

    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/responsive-style.css') ?>">

    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" id="changeColorScheme" href="<?= base_url('public/assets/css/colors/color-1.css') ?>">

    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/custom.css') ?>">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Header Section Start -->
    <header class="header--section style--1">

        <!-- Header Navbar Start -->
        <div class="header--navbar navbar bg-black" data-trigger="sticky">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Header Navbar Logo Start -->
                    <div class="header--navbar-logo navbar-brand">
                        <a href="index.html">
                            <img src="<?= base_url('public/assets/img/logo-white.png') ?>" class="normal" alt="">
                            <img src="<?= base_url('public/assets/img/logo-black.png') ?>" class="sticky" alt="">
                        </a>
                    </div>
                    <!-- Header Navbar Logo End -->
                </div>

                <div id="headerNav" class="navbar-collapse collapse float--right">
                    <!-- Header Nav Links Start -->
                    <ul class="header--nav-links style--1 nav ff--primary">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span>Home</span>
                                <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="home-1.html"><span>Home Version 1</span></a></li>
                                <li><a href="home-2.html"><span>Home Version 2</span></a></li>
                                <li><a href="home-3.html"><span>Home Version 3</span></a></li>
                                <li><a href="home-4.html"><span>Home Version 4</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span>Community</span>
                                <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="activity.html"><span>Activity</span></a></li>
                                <li class="active"><a href="members.html"><span>Members</span></a></li>
                                <li><a href="groups.html"><span>Groups</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span>BBPress</span>
                                <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="forums.html">Forums</a></li>
                                <li><a href="sub-forums.html">Sub Forums</a></li>
                                <li><a href="topics.html">Topics</a></li>
                                <li><a href="topic-replies.html">Topic Replies</a></li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span>Pages</span>
                                <i class="fa fa-caret-down"></i>
                            </a>

                            <div class="dropdown-menu">
                                <div class="row">
                                    <ul class="col-md-2">
                                        <li><a href="members.html">Members</a></li>
                                        <li><a href="groups.html">Groups</a></li>
                                        <li><a href="activity.html">Site Wide Activity</a></li>
                                        <li><a href="member-activity-personal.html">Member Activity</a></li>
                                        <li><a href="group-home.html">Group Activity</a></li>
                                    </ul>

                                    <ul class="col-md-2">
                                        <li><a href="member-profile.html">Member Profile</a></li>
                                        <li><a href="member-forum-topics.html">Member Forum</a></li>
                                        <li><a href="member-media-all.html">Member Media</a></li>
                                        <li><a href="group-forum.html">Group Forum</a></li>
                                        <li><a href="group-media.html">Group Media</a></li>
                                    </ul>

                                    <ul class="col-md-2">
                                        <li><a href="forums.html">Forums</a></li>
                                        <li><a href="sub-forums.html">Sub Forums</a></li>
                                        <li><a href="topics.html">Topics</a></li>
                                        <li><a href="topic-replies.html">Topic Replies</a></li>
                                        <li><a href="#">Dummy</a></li>
                                    </ul>

                                    <ul class="col-md-2">
                                        <li><a href="products.html">Products</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="#">Dummy</a></li>
                                    </ul>

                                    <ul class="col-md-2">
                                        <li><a href="blog-sidebar-right.html">Blog Sidebar Right</a></li>
                                        <li><a href="blog-sidebar-left.html">Blog Sidebar Left</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="#">Dummy</a></li>
                                        <li><a href="#">Dummy</a></li>
                                    </ul>

                                    <ul class="col-md-2">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span>Products</span>
                                <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="products.html">Products</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span>Blog</span>
                                <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="blog-sidebar-right.html">Blog Sidebar Right</a></li>
                                <li><a href="blog-sidebar-left.html">Blog Sidebar Left</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html"><span>Contact</span></a></li>
                    </ul>
                    <!-- Header Nav Links End -->
                </div>
            </div>
        </div>
        <!-- Header Navbar End -->
    </header>
    <!-- Header Section End -->