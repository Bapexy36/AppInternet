<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilesProduct $filesProduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $filesProduct->product_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $filesProduct->product_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Files Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filesProducts form large-9 medium-8 columns content">
    <?= $this->Form->create($filesProduct) ?>
    <fieldset>
        <legend><?= __('Edit Files Product') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
