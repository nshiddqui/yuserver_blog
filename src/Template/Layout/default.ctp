<?php
$yuserverTitle = 'Yuserver';
$yuserverDescription = 'the blogger and client best platform for blogging';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $yuserverTitle ?>: <?= $this->fetch('title') ?>- <?= $yuserverDescription ?>
        </title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no')); ?>
        <?= $this->Html->css('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900') ?>
        <?= $this->Html->css('open-iconic-bootstrap.min') ?>
        <?= $this->Html->css('animate') ?>
        <?= $this->Html->css('owl.carousel.min') ?>
        <?= $this->Html->css('owl.theme.default.min') ?>
        <?= $this->Html->css('magnific-popup') ?>
        <?= $this->Html->css('aos') ?>
        <?= $this->Html->css('ionicons.min') ?>
        <?= $this->Html->css('flaticon') ?>
        <?= $this->Html->css('icomoon') ?>
        <?= $this->Html->css('style') ?>
        <?= $this->Html->script('jquery.min') ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <?= $this->Html->link('Yu<i>server</i>.', '/', ['class' => 'navbar-brand', 'escape' => false]) ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><?= $this->Html->link('Home', '/', ['class' => 'nav-link']) ?></li>
                        <li class="nav-item"><?= $this->Html->link('Articles', '/articles', ['class' => 'nav-link']) ?></li>
                        <li class="nav-item"><?= $this->Html->link('Team', '/team', ['class' => 'nav-link']) ?></li>
                        <li class="nav-item"><?= $this->Html->link('Contact', '/contact', ['class' => 'nav-link']) ?></li>
                        <?php if ($this->request->getSession()->read('Auth.User.email')) { ?>
                            <li class="nav-item"><?= $this->Html->link('New Post', '/new-post', ['class' => 'nav-link']) ?></li>
                            <li class="nav-item"><?= $this->Html->link('Logout', '/logout', ['class' => 'nav-link']) ?></li>
                        <?php } else { ?>
                            <li class="nav-item"><?= $this->Html->link('Login', '/login', ['class' => 'nav-link']) ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

        <div class="hero-wrap js-fullheight" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <?php if (isset($header) && !empty($header)) { ?>
                    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                        <div class="col-md-9 ftco-animate pb-5 text-center">
                            <h1 class="mb-3 bread"><?= $header ?></h1>
                            <p class="breadcrumbs"><span class="mr-2"><?= $this->Html->link('Home <i class="ion-ios-arrow-forward"></i>', '/', ['escape' => false]) ?></span> <?= (isset($heading_main) && !empty($heading_main)) ? '<span class="mr-2">' . $this->Html->link('Articles <i class="ion-ios-arrow-forward"></i>', '/articles', ['escape' => false]) . '</span>' : '' ?> <span><?= $header ?></span></p>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                        <div class="col-md-12 ftco-animate">
                            <h2 class="subheading">Hello! Welcome to</h2>
                            <h1 class="mb-4 mb-md-0">Yuserver blog</h1>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="text">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <div class="mouse">
                                            <a href="#" class="mouse-icon">
                                                <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?= $this->fetch('content') ?>
        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="logo"><a href="#">Yu<span>server</span>.</a></h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4 ml-md-5">
                            <h2 class="ftco-heading-2">Information</h2>
                            <ul class="list-unstyled">
                                <li><?= $this->Html->link('<span class="ion-ios-arrow-forward mr-3"></span>Home', '/', ['escape' => false, 'class' => 'py-1 d-block']) ?></li>
                                <li><?= $this->Html->link('<span class="ion-ios-arrow-forward mr-3"></span>About', '/about', ['escape' => false, 'class' => 'py-1 d-block']) ?></li>
                                <li><?= $this->Html->link('<span class="ion-ios-arrow-forward mr-3"></span>Articles', '/articles', ['escape' => false, 'class' => 'py-1 d-block']) ?></li>
                                <li><?= $this->Html->link('<span class="ion-ios-arrow-forward mr-3"></span>Contact', '/contact', ['escape' => false, 'class' => 'py-1 d-block']) ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Have a Questions?</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text"> C-15 Qutub Vihar,<br /> Near Dwarka Sec-19,<br /> New Delhi, INDIA</span></li>
                                    <li><a href="tel://+917210482353"><span class="icon icon-phone"></span><span class="text">+91 721 0482 353</span></a></li>
                                    <li><a href="mailto://nazim27294@gmail.com"><span class="icon icon-envelope"></span><span class="text">nazim27294@gmail.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">

                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </footer>



        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


        <?= $this->Html->script('jquery-migrate-3.0.1.min') ?>
        <?= $this->Html->script('popper.min') ?>
        <?= $this->Html->script('bootstrap.min') ?>
        <?= $this->Html->script('jquery.easing.1.3') ?>
        <?= $this->Html->script('jquery.waypoints.min') ?>
        <?= $this->Html->script('jquery.stellar.min') ?>
        <?= $this->Html->script('owl.carousel.min') ?>
        <?= $this->Html->script('jquery.magnific-popup.min') ?>
        <?= $this->Html->script('aos') ?>
        <?= $this->Html->script('jquery.animateNumber.min') ?>
        <?= $this->Html->script('scrollax.min') ?>
        <?= $this->Html->script('main') ?>
    </body>
</html>
