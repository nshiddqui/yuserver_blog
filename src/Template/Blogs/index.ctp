<?php
$this->assign('blog-class', 'active');
?>
<style>
    .blog-image{
        height:300px;
        width: 300px;
    }
</style>
<section class="section section-intro context-dark">
    <div class="intro-bg" style="background: url(/img/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <h1 class="font-weight-bold wow fadeInLeft">Check Out Our Blogs</h1>
                <p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page. We are always happy to help you!</p>
            </div>
        </div>
    </div>
</section>
<!--Blogs-->
<section class="section section-sm position-relative">
    <div class="container">
        <?php foreach ($recent_articles as $recent_article) { ?>
            <div class="row row-30">
                <div class="col-lg-4">
                    <div class="block-decorate-img wow fadeInLeft" data-wow-delay=".2s">
                        <?= $this->Html->image('https://yuserver.in/img/' . $recent_article['blog_content']->image, ['class' => 'blog-image']) ?>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="offset-top-0 ml-5">
                        <h3 class="wow fadeInLeft text-capitalize devider-bottom" data-wow-delay=".3s">
                            <?=
                            $this->Text->truncate(
                                    $recent_article['blog_content']->title, 70, [
                                'ellipsis' => '...',
                                'exact' => false
                                    ]
                            )
                            ?>
                        </h3>
                        <p class="offset-xl-30 wow fadeInUp" data-wow-delay=".4s">
                            <?=
                            $this->Text->truncate(
                                    $recent_article['blog_content']->description, 365, [
                                'ellipsis' => '...',
                                'exact' => false
                                    ]
                            )
                            ?> 
                            <b style="white-space: nowrap;"> Created on : <?= date('d F, Y ', strtotime($recent_article['blog_content']->created)) ?></b></p>
                        <p class="default-letter-spacing font-weight-bold text-gray-dark wow fadeInUp" data-wow-delay=".4s">
                            <?= $this->Html->link('Read More', $recent_article->slug, ['class' => 'button-width-190 button-primary button-circle button-lg button offset-top-0 pull-right']) ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8 col-10 text-center">
            <div class="block-27">
                <ul class="pagination__list">
                    <?= $this->Paginator->prev('<') ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next('>') ?>
                </ul>
            </div>
        </div>
    </div>
</section>