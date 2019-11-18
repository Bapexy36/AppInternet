<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\House $house
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit House'), ['action' => 'edit', $house->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete House'), ['action' => 'delete', $house->id], ['confirm' => __('Are you sure you want to delete # {0}?', $house->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Houses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New House'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subcategories'), ['controller' => 'Subcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategory'), ['controller' => 'Subcategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="houses view large-9 medium-8 columns content">
    <h3><?= h($house->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $house->has('category') ? $this->Html->link($house->category->name, ['controller' => 'Categories', 'action' => 'view', $house->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subcategory') ?></th>
            <td><?= $house->has('subcategory') ? $this->Html->link($house->subcategory->name, ['controller' => 'Subcategories', 'action' => 'view', $house->subcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($house->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($house->id) ?></td>
        </tr>
    </table>
</div>
