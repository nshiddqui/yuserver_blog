<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogContent[]|\Cake\Collection\CollectionInterface $blogContents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Blog Content'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blogContents index large-9 medium-8 columns content">
    <h3><?= __('Blog Contents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('blog_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogContents as $blogContent): ?>
            <tr>
                <td><?= $this->Number->format($blogContent->id) ?></td>
                <td><?= $blogContent->has('blog') ? $this->Html->link($blogContent->blog->id, ['controller' => 'Blogs', 'action' => 'view', $blogContent->blog->id]) : '' ?></td>
                <td><?= h($blogContent->title) ?></td>
                <td><?= h($blogContent->created) ?></td>
                <td><?= h($blogContent->modified) ?></td>
                <td><?= h($blogContent->image) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $blogContent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $blogContent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $blogContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogContent->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
