<?php
$this->assign('title', 'Create Your Own Post');
echo $this->Html->script('ckeditor/ckeditor');
?>
<section class="section section-intro context-dark">
    <div class="intro-bg" style="background: url(/img/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <h1 class="font-weight-bold wow fadeInLeft">Create Your Own Post Here</h1>
            </div>
        </div>
    </div>
</section>
<!--Mailform-->
<section class="section section-md">
    <div class="container">
        <!--RD Mailform-->
        <div class="row justify-content-center">
            <div class="col-xl-12 col-md-12 col-12">
                <?= $this->Form->create($blog, ['type' => 'file']) ?>
                <?php
                echo $this->Form->control('blog_content.title');
                echo $this->Form->control('blog_content.description', ['type' => 'textarea']);
                echo $this->Form->control('image', ['type' => 'file', 'required' => true]);
                echo $this->Form->control('blog_content.content', ['required' => false]);
                ?>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
<script>
    CKEDITOR.replace('blog-content-content', {
        height: 500
    });
</script>