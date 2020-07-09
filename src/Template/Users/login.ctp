<?php
$this->assign('title', 'Login');
?>
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-lg-6 ftco-animate fadeInUp ftco-animated">
                <?= $this->Form->create() ?>
                <?= $this->Form->control('email') ?>
                <?= $this->Form->control('password') ?>
                <?= $this->Form->button('Login') ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>