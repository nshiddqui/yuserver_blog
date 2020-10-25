<?php
$this->assign('title', 'Latest Articles');
?>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <?php foreach ($recent_articles as $recent_article) { ?>
                <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry justify-content-end">
                        <?= $this->Html->link(null, $recent_article->slug, ['class' => 'block-20', 'style' => "background-image: url(/img/{$recent_article['blog_content']->image});"]) ?>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day"><?= date('d', strtotime($recent_article['blog_content']->created)) ?></span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr"><?= date('Y', strtotime($recent_article['blog_content']->created)) ?></span>
                                    <span class="mos"><?= date('F', strtotime($recent_article['blog_content']->created)) ?></span>
                                </div>
                            </div>
                            <h3 class="heading mb-3"><a href="#"><?= $recent_article['blog_content']->title ?></a></h3>
                            <p><?= $recent_article['blog_content']->description ?></p>
                            <p><a href="#" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
                        </div>
                    </div>
                </div>
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Horizontal Ad -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6607550822593779" data-ad-slot="7274936351" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            <?php } ?>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <?= $this->Paginator->prev('<') ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next('>') ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>