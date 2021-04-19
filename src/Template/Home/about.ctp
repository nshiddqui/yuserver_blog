<?php
$this->assign('title', 'About US');
$this->assign('about-class', 'active');
?>
<section class="section section-intro context-dark">
    <div class="intro-bg" style="background: url(/img/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <h1 class="font-weight-bold wow fadeInLeft">About Us</h1>
                <p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page. We are always happy to help you!</p>
            </div>
        </div>
    </div>
</section>
<!-- About page about section-->
<section class="section section-md">
    <div class="container">
        <div class="row row-40 justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="offset-top-45 offset-lg-right-45">
                    <div class="section-name wow fadeInRight" data-wow-delay=".2s">About us</div>
                    <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">A Few Words<span class="text-primary"> about us</span></h3>
                    <p class="font-weight-bold text-gray-dark wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum nulla ac tincidunt malesuada. Sed volutpat semper elit quis pharetra. Etiam sodales a sem vitae fermentum.</p>
                    <p class="wow fadeInUp" data-wow-delay=".4s">Sapien eget mi proin sed libero enim sed faucibus turpis. Placerat in egestas erat imperdiet sed euismod nisi. Vulputate eu scelerisque felis imperdiet. Lorem donec massa sapien faucibus. Volutpat diam.</p>
                    <p class="wow fadeInUp" data-wow-delay=".4s">Adipiscing enim eu turpis egestas pretium aenean pharetra magna. Nullam non nisi est sit amet facilisis magna etiam. Nec feugiat in fermentum posuere urna nec.</p>
                    <div class="offset-top-20">
                        <!--Linear progress bar-->
                        <article class="progress-linear">
                            <div class="progress-header progress-header-simple">
                                <p>Management</p><span class="progress-value">85</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                                <div class="progress-bar-linear"></div>
                            </div>
                        </article>
                        <!--Linear progress bar-->
                        <article class="progress-linear">
                            <div class="progress-header progress-header-simple">
                                <p>Marketing</p><span class="progress-value">45</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                                <div class="progress-bar-linear"></div>
                            </div>
                        </article>
                        <!--Linear progress bar-->
                        <article class="progress-linear">
                            <div class="progress-header progress-header-simple">
                                <p>Analysis</p><span class="progress-value">90</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                                <div class="progress-bar-linear"></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-10 col-12">
                <div class="block-decorate-img wow fadeInLeft" data-wow-delay=".2s">
                    <?= $this->Html->image('about-us-cycle.png', ['alt' => 'Yuserver About Cycle ', 'width' => '570', 'height' => '351']) ?>
                </div>
            </div>
        </div>
    </div>
</section>