<?php $session = \Config\Services::session(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>GrowX</title>

    <!-- ==== Document Meta ==== -->
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
                        <a href="<?= base_url('home') ?>">
<!--                            <img src="--><?//= base_url('public/assets/img/logo-white.png') ?><!--" class="normal" alt="">-->
<!--                            <img src="--><?//= base_url('public/assets/img/logo-black.png') ?><!--" class="sticky" alt="">-->
                            <h2 style="color: #8B0000">GrowX</h2>
                        </a>
                    </div>
                    <!-- Header Navbar Logo End -->
                </div>

                <div id="headerNav" class="navbar-collapse collapse float--right">
                    <!-- Header Nav Links Start -->
                    <ul class="header--nav-links style--1 nav ff--primary">

                        <?php if(session()->get('is_logged_in')): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span>Studio</span>
                                <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('cursos') ?>">Criar curso</a></li>
                                <li><a href="<?= base_url('cursando') ?>">Assistir Curso</a></li>
                                <li><a href="<?= base_url('todos-cursos') ?>">Cursos disponíveis</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= base_url('logout') ?>"><span>Sair</span></a></li>
                        <?php endif ?>
                    </ul>
                    <!-- Header Nav Links End -->
                </div>
            </div>
        </div>
        <!-- Header Navbar End -->
    </header>
    <!-- Header Section End -->