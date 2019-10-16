<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilesProduct $filesProduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Files Product'), ['action' => 'edit', $filesProduct->product_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Files Product'), ['action' => 'delete', $filesProduct->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $filesProduct->product_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Files Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Files Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="filesProducts view large-9 medium-8 columns content">
    <h3><?= h($filesProduct->product_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $filesProduct->has('product') ? $this->Html->link($filesProduct->product->name, ['controller' => 'Products', 'action' => 'view', $filesProduct->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File') ?></th>
            <td><?= $filesProduct->has('file') ? $this->Html->link($filesProduct->file->name, ['controller' => 'Files', 'action' => 'view', $filesProduct->file->id]) : '' ?></td>
        </tr>
    </table>
</div>
