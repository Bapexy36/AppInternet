<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilesProduct[]|\Cake\Collection\CollectionInterface $filesProducts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Files Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filesProducts index large-9 medium-8 columns content">
    <h3><?= __('Files Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filesProducts as $filesProduct): ?>
            <tr>
                <td><?= $filesProduct->has('product') ? $this->Html->link($filesProduct->product->name, ['controller' => 'Products', 'action' => 'view', $filesProduct->product->id]) : '' ?></td>
                <td><?= $filesProduct->has('file') ? $this->Html->link($filesProduct->file->name, ['controller' => 'Files', 'action' => 'view', $filesProduct->file->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $filesProduct->product_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $filesProduct->product_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $filesProduct->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $filesProduct->product_id)]) ?>
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
