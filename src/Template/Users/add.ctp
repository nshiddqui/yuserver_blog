<?php
$this->assign('title', 'Register Here');
?>
<section class="section section-intro context-dark">
    <div class="intro-bg" style="background: url(/img/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <h1 class="font-weight-bold wow fadeInLeft">Register Here</h1>
            </div>
        </div>
    </div>
</section>
<!--Mailform-->
<section class="section section-md">
    <div class="container">
        <!--RD Mailform-->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-8 col-12">
                <?= $this->Form->create($user) ?>
                <?= $this->Form->control('email') ?>
                <?= $this->Form->control('password') ?>
                <?= $this->Form->button('Register') ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>