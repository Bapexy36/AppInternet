<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php
$this->extend('/Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Clothes'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Clothes'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($clothe); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Clothe']) ?></legend>
    <?php
            echo $this->Form->control('name');
            echo $this->Form->control('price');?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
            