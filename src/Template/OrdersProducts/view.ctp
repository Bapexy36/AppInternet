<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersProduct $ordersProduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Orders Product'), ['action' => 'edit', $ordersProduct->order_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Orders Product'), ['action' => 'delete', $ordersProduct->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersProduct->order_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orders Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordersProducts view large-9 medium-8 columns content">
    <h3><?= h($ordersProduct->order_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $ordersProduct->has('order') ? $this->Html->link($ordersProduct->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersProduct->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $ordersProduct->has('product') ? $this->Html->link($ordersProduct->product->name, ['controller' => 'Products', 'action' => 'view', $ordersProduct->product->id]) : '' ?></td>
        </tr>
    </table>
</div>
