<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php foreach ($trendings as $trending) { ?>
                    <div class="case">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                <?= $this->Html->link(null, $trending->slug, ['class' => 'img w-100 mb-3 mb-md-0', 'style' => "background-image: url(/img/{$trending['blog_content']->image});"]) ?>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                <div class="text w-100 pl-md-3">
                                    <h2><?= $this->Html->link($trending['blog_content']->title, $trending->slug) ?></h2>
                                    <span class="subheading"><?= $trending['blog_content']->description ?></span>
                                    <ul class="media-social list-unstyled">
                                        <li class="ftco-animate"><?= $this->Html->link('<span class="icon-twitter"></span>', "https://twitter.com/share?text={$trending['blog_content']->title}&url=" . $this->Url->build($trending->slug, true), ['escape' => false]) ?></li>
                                        <li class="ftco-animate"><?= $this->Html->link('<span class="icon-facebook"></span>', 'https://www.facebook.com/share.php?u=' . $this->Url->build($trending->slug, true), ['escape' => false]) ?></li>
                                        <li class="ftco-animate"><?= $this->Html->link('<span class="icon-whatsapp"></span>', 'https://api.whatsapp.com/send?text=' . $this->Url->build($trending->slug, true), ['escape' => false]) ?></li>
                                    </ul>
                                    <div class="meta">
                                        <p class="mb-0"><?= date('m/d/Y', strtotime($trending['blog_content']->created)) ?></p>
                                    </div>
                                </div>
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