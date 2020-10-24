<?php
$this->assign('title', $blog['blog_content']->title);
$this->assign('description', $blog['blog_content']->description);
$this->assign('keywords', $blog['blog_content']->keywords);
$this->assign('image', '//img/'.$blog['blog_content']->image);
?>
<?= $this->Html->meta('keywords', 'enter any meta keyword here') ?>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate fadeInUp ftco-animated">
                <p class="mb-5">
                    <?= $this->Html->image($blog['blog_content']->image, ['alt' => $blog['blog_content']->image, 'class' => 'img-fluid w-100']) ?>
                </p>
                <h2 class="mb-3"><?= $blog['blog_content']->title ?></h2>
                <?= $blog['blog_content']->content ?>
                <div class="pt-5 mt-5">
                    <h3 class="mb-5"><?= count($blog['comments']) ?> Comments</h3>
                    <ul class="comment-list">
                        <?php foreach ($blog['comments'] as $comments) { ?>
                            <li class="comment">
                                <div class="vcard bio">
                                    <?= $this->Html->image('user.png', ['alt' => $comments->name]) ?>
                                </div>
                                <div class="comment-body">
                                    <h3><?= $comments->name ?></h3>
                                    <div class="meta mb-3"><?= date('F d, Y \a\t h:iA', strtotime($comments->created)) ?></div>
                                    <p><?= $comments->message ?></p>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <?= $this->Form->create($comment) ?>
                        <?= $this->Form->hidden('blog_id', ['value' => $blog->id]) ?>
                        <?= $this->Form->control('name') ?>
                        <?= $this->Form->control('email') ?>
                        <?= $this->Form->control('website') ?>
                        <?= $this->Form->control('message') ?>
                        <?= $this->Form->submit('Post Comment', ['class' => 'btn py-3 px-4 btn-primary']) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>

            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate fadeInUp ftco-animated">
                <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                    <h3>Recent Blog</h3>
                    <?php foreach ($recent_blogs as $recent_blog) { ?>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(/img/<?= $recent_blog['blog_content']->image ?>);"></a>
                            <div class="text">
                                <h3 class="heading"><?= $this->Html->link($recent_blog['blog_content']->title, $recent_blog->slug) ?></h3>
                                <div class="meta">
                                    <div><span class="icon-calendar"></span> <?= date('M. d, Y', strtotime($recent_blog->created)) ?></div>
                                    <div><span class="icon-chat"></span> <?= count($recent_blog['comments']) ?></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</section>