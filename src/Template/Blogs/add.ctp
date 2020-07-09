<?= $this->Html->script('ck-editor/ckeditor') ?>
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center my-5">
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
</section>
<script>
    CKEDITOR.replace('blog-content-content', {
        height: 500
    });
</script>