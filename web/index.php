<?php
    include('./locale/localization.php');

    // initialize localization
    L10n::initialize($_GET['locale_id']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Shadows+Into+Light+Two|Amatic+SC:400,700|Open+Sans+Condensed:300,700|Roboto:400,700,900&display=swap&subset=latin-ext" rel="stylesheet">

        <title>Model management</title>
        <link rel="shortcut icon" type="image/svg+xml" href="assets/img/Logo.svg">

        <!-- Load CSS -->
        <link rel="stylesheet" href="assets/fonts/line-icons.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/main.css" >
        <link rel="stylesheet" href="assets/css/navigation.css" >
    </head>

    <body>
        <!-- Header Area wrapper Starts -->
        <header class="">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-md fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a href="index.php" class="navbar-brand">
                        <img src="assets/img/Logo.svg" class="brand-logo-sm" alt="MoM">
                        <span class="brand-name-style">MoM</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="lni-menu"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php/#hero-area"><?L10n::trans('site.navigation.home')?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php/#application"><?L10n::trans('site.navigation.whatIsIt')?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php/#pricing"><?L10n::trans('site.navigation.pricing')?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php/#about-us"><?L10n::trans('site.navigation.aboutUs')?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php/#login"><?L10n::trans('site.navigation.login')?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php/#footer"><?L10n::trans('site.navigation.contact')?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        <!-- Navbar End -->
        </header>

        <section id="hero-area">
            <div class="container">
            </div>
        </section>

        <section id="application">
        </section>

        <section id="login">
            <div class="container">
                <div class="section-header">
                    <h1><?L10n::trans('site.navigation.login')?></h1>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <form id="form-login">
                            <span><?L10n::trans('site.inputs.username')?></span>
                            <input type="text" value="test"></input>
                            <br><br>
                            <span><?L10n::trans('site.inputs.password')?></span>
                            <input type="password" value="test"></input>
                            <br><br>
                            <input type="submit">
                        </form>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </section>

        <section id="pricing">
        </section>

        <section id="about-us">
        </section>

        <section id="footer">
        </section>

        <!-- Load JavaScripts -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/js/jquery-min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/jquery.nav.js"></script>
        <script src="assets/js/scrolling-nav.js"></script>
        <script src="assets/js/loader.js"></script>

    </body>
</html>