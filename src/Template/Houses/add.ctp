<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Subcategories",
    "action" => "getByCategory",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('Houses/add', ['block' => 'scriptBottom']);
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Houses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subcategories'), ['controller' => 'Subcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subcategory'), ['controller' => 'Subcategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="houses form large-9 medium-8 columns content">
    <?= $this->Form->create($house) ?>
    <fieldset>
        <legend><?= __('Add House') ?></legend>
        <?php
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('subcategory_id', ['options' => $subcategories]);
            echo $this->Form->control('city');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
