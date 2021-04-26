<?php
$yuserverBaseTitle = 'Yuserver';
$yuserverBaseDescription = 'the blogger and client best platform for blogging';
$yuserverKeywords = (!empty($this->fetch('keywords')) ? $this->fetch('keywords') : 'yuserver, blogging, blogger, blog, developer');
$yuserverTitle = ($this->request->getAttribute('here') === '/' ? $yuserverBaseTitle . ': ' . $yuserverBaseDescription : $this->fetch('title') . ' : ' . $yuserverBaseTitle);
$yuserverDescription = (!empty($this->fetch('description')) ? $this->fetch('description') : 'Yuserver provides a full range of business consulting & advisory services to small, medium, and international companies worldwide. We use innovations and experience to drive your success.');
$yuserverImage = $this->Url->build((!empty($this->fetch('image')) ? $this->fetch('image') : '/img/logo-blue.png'), true);
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title><?= $yuserverTitle ?></title>
        <?= $this->Html->charset() ?>
        <?= $this->Html->meta('viewport', 'width=device-width, height=device-height, initial-scale=1.0') ?>
        <?= $this->Html->meta(['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge']) ?>
        <?= $this->Html->meta('keywords', $yuserverKeywords) ?>
        <?= $this->Html->meta('description', $yuserverDescription) ?>
        <?= $this->Html->meta(['property' => 'og:title', 'content' => $yuserverTitle]) ?>
        <?= $this->Html->meta(['property' => 'og:description', 'content' => $yuserverDescription]) ?>
        <?= $this->Html->meta(['property' => 'og:image', 'content' => $yuserverImage]) ?>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('https://fonts.googleapis.com/css?family=Montserrat:300,400,700%7CPoppins:300,400,500,700,900') ?>
        <?= $this->Html->css('bootstrap') ?>
        <?= $this->Html->css('fonts') ?>
        <?= $this->Html->css('style') ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        <?php if (isset($previewAdds)) { ?>
            <?= $this->Html->script('https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js', ['data-ad-client' => 'ca-pub-6607550822593779', 'async' => true]) ?>
        <?php } ?>
    </head>
    <body>
        <!--        <div class="preloader">
                    <div class="preloader-body">
                        <div class="cssload-container">
                            <div class="cssload-speeding-wheel"></div>
                        </div>
                        <p>Loading...</p>
                    </div>
                </div>-->
<!--        <form class="donation-button">
            <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_H37Zv6ZSwHwPAD" async></script>
        </form>-->
        <div classNotExists="page">
            <header class="section page-header">
                <!--RD Navbar-->
                <div class="rd-navbar-wrap">
                    <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                        <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                        <div class="rd-navbar-aside-outer rd-navbar-collapse bg-gray-dark">
                            <div class="rd-navbar-aside">
                                <ul class="list-inline navbar-contact-list">
                                    <li>
                                        <div class="unit unit-spacing-xs align-items-center">
                                            <div class="unit-left"><span class="icon text-middle fa-phone"></span></div>
                                            <div class="unit-body"><a href="tel:+917210482353">+91 721 048 23 53</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-spacing-xs align-items-center">
                                            <div class="unit-left"><span class="icon text-middle fa-envelope"></span></div>
                                            <div class="unit-body"><a href="mailto:support@yuserver.in">support@yuserver.in</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-spacing-xs align-items-center">
                                            <div class="unit-left"><span class="icon text-middle fa-map-marker"></span></div>
                                            <div class="unit-body"><a href="#">C-15 Qutub Vihar,Near Dwarka Sec-19,New Delhi, INDIA</a></div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="social-links">
                                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-linkedin" href="#"></a></li>
                                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="https://www.facebook.com/yuserver"></a></li>
                                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="rd-navbar-main-outer">
                            <div class="rd-navbar-main">
                                <!--RD Navbar Panel-->
                                <div class="rd-navbar-panel">
                                    <!--RD Navbar Toggle-->
                                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                    <!--RD Navbar Brand-->
                                    <div class="rd-navbar-brand">
                                        <!--Brand-->
                                        <a class="brand" href="/">
                                            <?= $this->Html->image('logo-light.png', ['class' => 'brand-logo-dark', 'alt' => 'logo', 'width' => '100', 'height' => '17']) ?>
                                            <?= $this->Html->image('logo-blue.png', ['class' => 'brand-logo-light', 'alt' => 'logo', 'width' => '100', 'height' => '17']) ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="rd-navbar-main-element">
                                    <div class="rd-navbar-nav-wrap">
                                        <ul class="rd-navbar-nav">
                                            <li class="rd-nav-item <?= $this->fetch('about-class') ?>">
                                                <?= $this->Html->link('About', '/about', ['class' => 'rd-nav-link']) ?>
                                            </li>
                                            <li class="rd-nav-item <?= $this->fetch('team-class') ?>">
                                                <?= $this->Html->link('Our Team', '/team', ['class' => 'rd-nav-link']) ?>
                                            </li>
                                            <li class="rd-nav-item <?= $this->fetch('adclick-class') ?>">
                                                <?= $this->Html->link('Adclick', '/adclick', ['class' => 'rd-nav-link']) ?>
                                            </li>
                                            <li class="rd-nav-item <?= $this->fetch('contact-class') ?>">
                                                <?= $this->Html->link('Contact', '/contact', ['class' => 'rd-nav-link']) ?>
                                            </li>
                                            <li class="rd-nav-item <?= $this->fetch('blog-class') ?>">
                                                <?= $this->Html->link('Blogs', '/blogs', ['class' => 'rd-nav-link']) ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
            <!--Footer-->
            <?php if (isset($previewAdds)) { ?>
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Horizontal Ad -->
                <ins class="adsbygoogle"
                     style="display:block;text-align:center"
                     data-ad-client="ca-pub-6607550822593779"
                     data-ad-slot="7274936351"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            <?php } ?>
            <footer class="section footer-classic section-sm">
                <div class="container">
                    <div class="row row-30">
                        <div class="col-lg-3 wow fadeInLeft">
                            <!--Brand-->
                            <a class="brand" href="/">
                                <?= $this->Html->image('logo-light.png', ['class' => 'brand-logo-dark', 'alt' => 'logo', 'width' => '100', 'height' => '17']) ?>
                                <?= $this->Html->image('logo-blue.png', ['class' => 'brand-logo-light', 'alt' => 'logo', 'width' => '100', 'height' => '17']) ?>
                            </a>
                            <p class="footer-classic-description offset-top-0 offset-right-25">
                                Yuserver provides a full range of business consulting & advisory services to small, medium, and international companies worldwide. We use innovations and experience to drive your success.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-12 wow fadeInUp">
                            <P class="footer-classic-title">contact info</P>
                            <div class="d-block offset-top-0">
                                C-15 Qutub Vihar,
                                <span class="d-lg-block"> Near Dwarka Sec-19, </span>
                                <span class="d-lg-block"> New Delhi, INDIA</span>
                            </div>
                            <a class="d-inline-block accent-link" href="mailto:support@yuserver.in">support@yuserver.in</a>
                            <a class="d-inline-block d-lg-block" href="tel:+917210482353">+91 721 048 23 53</a>
                        </div>
                        <div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                            <P class="footer-classic-title">newsletter</P>
                            <form class="rd-mailform text-left footer-classic-subscribe-form" data-form-output="form-output-global" data-form-type="contact" method="get" action="/subcribe-us">
                                <div class="form-wrap">
                                    <label class="form-label" for="subscribe-email">Your Email Address</label>
                                    <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required">
                                </div>
                                <div class="form-button group-sm text-center text-lg-left">
                                    <button class="button button-primary button-circle" type="submit">subscribe</button>
                                </div>
                            </form>
                            <p>Be the first to find out about our latest blogs, updates, and special offers.</p>
                        </div>
                    </div>
                </div>
                <div class="container wow fadeInUp" data-wow-delay=".4s">
                    <div class="footer-classic-aside">
                        <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved. Developed by <?= $this->Html->link('Nazim', 'https://nazim.yuserver.in') ?></p>
                        <ul class="social-links">
                            <li><a class="fa fa-linkedin" href="#"></a></li>
                            <li><a class="fa fa fa-twitter" href="#"></a></li>
                            <li><a class="fa fa-facebook" href="https://www.facebook.com/yuserver"></a></li>
                            <li><a class="fa fa-instagram" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
        <div class="snackbars" id="form-output-global"></div>
        <?= $this->Html->script('core.min') ?>
        <?= $this->Html->script('script') ?>
        <?= $this->Html->script('https://www.gstatic.com/firebasejs/7.24.0/firebase.js') ?>
        <?= $this->Html->script('firebase-notification-push') ?>
        <!--coded by Drel-->
    </body>

</html>