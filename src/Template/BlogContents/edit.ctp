<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogContent $blogContent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $blogContent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $blogContent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Blog Contents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blogContents form large-9 medium-8 columns content">
    <?= $this->Form->create($blogContent) ?>
    <fieldset>
        <legend><?= __('Edit Blog Content') ?></legend>
        <?php
            echo $this->Form->control('blog_id', ['options' => $blogs]);
            echo $this->Form->control('title');
            echo $this->Form->control('content');
            echo $this->Form->control('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
