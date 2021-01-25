<?php
$this->assign('home-class', 'active');
?>
<!--Main section-->
<section class="section main-section parallax-scene-js" style="background:url('/img/bg-1-1700x803.jpg') no-repeat center center; background-size:cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-12">
                <div class="main-decorated-box text-center text-xl-left">
                    <h1 class="text-white text-xl-center wow slideInRight" data-wow-delay=".3s"><span class="align-top offset-top-30 d-inline-block font-weight-light prefix-text">the</span><span class="big font-weight-bold d-inline-flex offset-right-170">best</span><span class="biggest d-block d-xl-flex font-weight-bold">Solutions.</span></h1>
                    <div class="decorated-subtitle text-italic text-white wow slideInLeft">Fresh Ideas for Your Business</div>
                </div>
            </div>
            <div class="col-12 text-center offset-top-75" data-wow-delay=".2s"><a class="button-way-point d-inline-block text-center d-inline-flex flex-column justify-content-center" href="#" data-custom-scroll-to="about"><span class="fa-chevron-down"></span></a></div>
        </div>
    </div>
    <div class="decorate-layer">
        <div class="layer-1">
            <div class="layer" data-depth=".20"><img src="/img/parallax-item-1-563x532.png" alt="" width="563" height="266"/>
            </div>
        </div>
        <div class="layer-2">
            <div class="layer" data-depth=".30"><img src="/img/parallax-item-2-276x343.png" alt="" width="276" height="171"/>
            </div>
        </div>
        <div class="layer-3">
            <div class="layer" data-depth=".40"><img src="/img/parallax-item-3-153x144.png" alt="" width="153" height="72"/>
            </div>
        </div>
        <div class="layer-4">
            <div class="layer" data-depth=".20"><img src="/img/parallax-item-4-69x74.png" alt="" width="69" height="37"/>
            </div>
        </div>
        <div class="layer-5">
            <div class="layer" data-depth=".40"><img src="/img/parallax-item-5-72x75.png" alt="" width="72" height="37"/>
            </div>
        </div>
        <div class="layer-6">
            <div class="layer" data-depth=".30"><img src="/img/parallax-item-6-45x54.png" alt="" width="45" height="27"/>
            </div>
        </div>
    </div>
</section>
<!--About-->
<section class="section section-sm position-relative">
    <div class="container">
        <div class="row row-30">
            <div class="col-lg-6">
                <div class="block-decorate-img wow fadeInLeft" data-wow-delay=".2s"><img src="/img/home-1-570x703.jpg" alt="" width="570" height="351"/>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="block-sm offset-top-45">
                    <div class="section-name wow fadeInRight" data-wow-delay=".2s">Yuserver Earning</div>
                    <h3 class="wow fadeInLeft text-capitalize devider-bottom" data-wow-delay=".3s">Ad<span class="text-primary">Click</span></h3>
                    <p class="offset-xl-40 wow fadeInUp" data-wow-delay=".4s">Small or big, your business will love our financial help and business consultations! We are happy when our clients are too... Actually, this is quite simple to achieve - because each time we help them in sorting out different accounting intricacies or save the day before filing the taxes, they are happy indeed! And so are we!</p>
                    <p class="default-letter-spacing font-weight-bold text-gray-dark wow fadeInUp" data-wow-delay=".4s">We have over fifteen years of successful experience in financial sphere in the US business market.</p>
                    <?= $this->Html->link('Read More', '/adclick', ['class' => 'button-width-190 button-primary button-circle button-lg button offset-top-30']) ?>&nbsp;
                    <?= $this->Html->link('Start Earning', 'https://adclick.yuserver.in', ['class' => 'button-width-190 button-primary button-circle button-lg button offset-top-30', 'target' => '_BLANK']) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="decor-text decor-text-1">MONEY</div>
</section>
<!--Features-->
<section class="section custom-section position-relative section-md">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-12">
                <div class="section-name wow fadeInRight">Yuserver Management</div>
                <h3 class="text-capitalize devider-left wow fadeInLeft" data-wow-delay=".2s">Labor's<span class="text-primary"> Management</span></h3>
                <p>With over 20 years of experience in business consulting, we have a lot to offer to our clients. Here are some reasons why companies worldwide choose us.</p>
                <div class="row row-15">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="box-default">
                            <div class="box-default-title">Innovative Solutions</div>
                            <p class="box-default-description">Our services and solutions are built on business innovations.</p><span class="box-default-icon novi-icon icon-lg mercury-icon-lightbulb-gears"></span>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="box-default">
                            <div class="box-default-title">Strategic Thinking</div>
                            <p class="box-default-description">СonsultBiz works strategically to forge the best path for your business.</p><span class="box-default-icon novi-icon icon-lg mercury-icon-target-2"></span>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="box-default">
                            <div class="box-default-title">Experienced Team</div>
                            <p class="box-default-description">We employ the best consultants with more than 10 years of experience.</p><span class="box-default-icon novi-icon icon-lg mercury-icon-user"></span>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="box-default">
                            <div class="box-default-title">Creative Approach</div>
                            <p class="box-default-description">Every project we work on is based on the creative solutions of any issues.</p><span class="box-default-icon novi-icon icon-lg mercury-icon-partners"></span>
                        </div>
                    </div>
                    <?= $this->Html->link('Read More', '/adclick', ['class' => 'button-width-190 button-primary button-circle button-lg button offset-top-30']) ?>&nbsp;
                    <?= $this->Html->link('See Demo', 'https://adclick.yuserver.in', ['class' => 'button-width-190 button-primary button-circle button-lg button offset-top-30', 'target' => '_BLANK']) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="image-left-side wow slideInRight" data-wow-delay=".5s"><img src="/img/home-2-636x480.jpg" alt="" width="636" height="240"/>
    </div>
    <div class="decor-text decor-text-2 wow fadeInUp" data-wow-delay=".3s">Labor's</div>
</section>