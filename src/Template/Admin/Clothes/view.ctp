<?php
$this->extend('/Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Clothe'), ['action' => 'edit', $clothe->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Clothe'), ['action' => 'delete', $clothe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clothe->id)]) ?> </li>
<li><?= $this->Html->link(__('List Clothes'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Clothe'), ['action' => 'add']) ?> </li>
<li><?=
    $this->Html->link('Section publique en JS', [
        'prefix' => false,
        'controller' => 'Clothes',
        'action' => 'index'
    ]);
    ?>
</li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<div class="dropdown hidden-xs">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <?= __("Actions") ?>
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <?= $this->fetch('tb_actions') ?>
    </ul>
</div>
<?php
$this->end();
?>
<div class="panel panel-default">

    <div class="panel-heading">
        <h3 class="panel-title"><?= h($clothe->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($clothe->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Name') ?></td>
            <td><?= h($clothe->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Price') ?></td>
            <td><?= h($clothe->price) ?></td>
        </tr>
       
        
    </table>
</div>

