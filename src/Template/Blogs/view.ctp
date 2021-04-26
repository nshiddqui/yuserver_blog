<?php
$this->assign('title', $blog['blog_content']->title);
$this->assign('description', $blog['blog_content']->description);
$this->assign('keywords', $blog['blog_content']->keywords);
$this->assign('image', '/img/' . $blog['blog_content']->image);
?>
<style>
    .block-21 .blog-img {
        display: block;
        height: 80px;
        width: 80px; 
    }

    .block-21 .text {
        width: calc(100% - 100px);
    }
    .block-21 .text .heading {
        font-size: 16px;
        font-weight: 400; 
    }
    .block-21 .text .heading a {
        color: #000000; 
    }
    .block-21 .text .heading a:hover, .block-21 .text .heading a:active, .block-21 .text .heading a:focus {
        color: #9200FF; 
    }
    .block-21 .text .meta > div {
        display: inline-block;
        font-size: 12px;
        margin-right: 5px; 
    }
    .block-21 .text .meta > div a {
        color: gray;
    }

    .comment-list {
        padding: 0;
        margin: 0; 
    }
    .comment-list .children {
        padding: 50px 0 0 40px;
        margin: 0;
        float: left;
        width: 100%;
    }
    .comment-list li {
        padding: 0;
        margin: 0 0 30px 0;
        float: left;
        width: 100%;
        clear: both;
        list-style: none; 
    }
    .comment-list li .vcard {
        width: 80px;
        float: left; 
    }
    .comment-list li .vcard img {
        width: 50px;
        border-radius: 50%;
    }
    .comment-list li .comment-body {
        float: right;
        width: calc(100% - 80px);
    }
    .comment-list li .comment-body h3 {
        font-size: 20px; 
    }
    .comment-list li .comment-body .meta {
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: .1em;
        color: #ccc;
    }
    .comment-list li .comment-body .reply {
        padding: 5px 10px;
        background: #e6e6e6;
        color: #000000;
        text-transform: uppercase;
        font-size: 11px;
        letter-spacing: .1em;
        font-weight: 400;
        border-radius: 4px; 
    }
    .comment-list li .comment-body .reply:hover {
        color: #fff;
        background: black;
    }


</style>
<section class="section section-intro context-dark">
    <div class="intro-bg" style="background: url(/img/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <h1 class="font-weight-bold wow fadeInLeft">Here is Blog Content</h1>
                <p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page. We are always happy to help you!</p>
            </div>
        </div>
    </div>
</section>
<!--Blogs Content-->
<section class="section section-sm position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p class="mb-5 fadeInLeft wow">
                    <?= $this->Html->image($blog['blog_content']->image, ['alt' => $blog['blog_content']->image, 'class' => 'img-fluid w-100']) ?>
                </p>
                <h2 class="mb-3 fadeInUp wow"><?= $blog['blog_content']->title ?></h2>
                <div class="fadeInLeft wow">
                    <?= $this->Text->autoParagraph($blog['blog_content']->content) ?>
                </div>
                <div class="pt-5 mt-5">
                    <h3 class="mb-5"><?= count($blog['comments']) ?> Comments</h3>
                    <ul class="comment-list">
                        <?php foreach ($blog['comments'] as $comments) { ?>
                            <li class="comment fadeInLeft wow">
                                <div class="vcard bio">
                                    <?= $this->Html->image('user.png', ['alt' => $comments->name]) ?>
                                </div>
                                <div class="comment-body">
                                    <h3><?= $comments->name ?></h3>
                                    <div class="meta mb-3"><?= date('F d, Y \a\t h:iA', strtotime($comments->created)) ?></div>
                                    <pre><?= $comments->message ?></pre>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    <!-- END comment-list -->
                    <?php if (count($blog['comments']) < 30) { ?>
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <?= $this->Form->create($comment) ?>
                            <?= $this->Form->hidden('blog_id', ['value' => $blog->id]) ?>
                            <?= $this->Form->control('name') ?>
                            <?= $this->Form->control('email') ?>
                            <?= $this->Form->control('website') ?>
                            <?= $this->Form->control('message') ?>
                            <?= $this->Form->submit('Post Comment', ['class' => 'button-width-190 button-primary button-circle button-lg button offset-top-30']) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    <?php } ?>
                </div>

            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar pl-lg-5">
                <div class="sidebar-box">
                    <h3 class="mb-3">Recent Blog</h3>
                    <?php foreach ($recent_blogs as $recent_blog) { ?>
                        <div class="block-21 mb-4 d-flex  fadeInRight wow">
                            <a class="blog-img mr-4" style="background-image: url(/img/<?= $recent_blog['blog_content']->image ?>);background-size: cover;"></a>
                            <div class="text">
                                <h3 class="heading"><?=
                                    $this->Html->link(
                                            $this->Text->truncate(
                                                    $recent_blog['blog_content']->title, 70, [
                                                'ellipsis' => '...',
                                                'exact' => false
                                                    ]
                                            ), $recent_blog->slug)
                                    ?></h3>
                                <div class="meta">
                                    <div><span class="icon-calendar"></span> <?= date('M. d, Y', strtotime($recent_blog->created)) ?></div>
                                    <div><span class="icon-chat"></span> <?= $recent_blog->views ?></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (isset($previewAdds)) { ?>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Horizontal Ad -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-6607550822593779"
                             data-ad-slot="7274936351"
                             data-ad-format="auto"
                             data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    <?php } ?>
                    <?php if (isset($previewAdds)) { ?>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Horizontal Ad -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-6607550822593779"
                             data-ad-slot="7274936351"
                             data-ad-format="auto"
                             data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</section>