<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\House[]|\Cake\Collection\CollectionInterface $houses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New House'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subcategories'), ['controller' => 'Subcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subcategory'), ['controller' => 'Subcategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="houses index large-9 medium-8 columns content">
    <h3><?= __('Houses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subcategory_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($houses as $house): ?>
            <tr>
                <td><?= $this->Number->format($house->id) ?></td>
                <td><?= $house->has('category') ? $this->Html->link($house->category->name, ['controller' => 'Categories', 'action' => 'view', $house->category->id]) : '' ?></td>
                <td><?= $house->has('subcategory') ? $this->Html->link($house->subcategory->name, ['controller' => 'Subcategories', 'action' => 'view', $house->subcategory->id]) : '' ?></td>
                <td><?= h($house->city) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $house->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $house->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $house->id], ['confirm' => __('Are you sure you want to delete # {0}?', $house->id)]) ?>
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
