<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogContent $blogContent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Blog Content'), ['action' => 'edit', $blogContent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Blog Content'), ['action' => 'delete', $blogContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogContent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Blog Contents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog Content'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="blogContents view large-9 medium-8 columns content">
    <h3><?= h($blogContent->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Blog') ?></th>
            <td><?= $blogContent->has('blog') ? $this->Html->link($blogContent->blog->id, ['controller' => 'Blogs', 'action' => 'view', $blogContent->blog->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($blogContent->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($blogContent->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($blogContent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($blogContent->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($blogContent->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($blogContent->content)); ?>
    </div>
</div>
