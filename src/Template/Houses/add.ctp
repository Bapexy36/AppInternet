<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Categories",
    "action" => "getCategories",
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


<div class="houses form large-9 medium-8 columns content" ng-app="linkedlists" ng-controller="categoriesController">
    <!-- h3> Debug </h3>
    You have selected category: <span ng-bind="subcategories.id"></span> <span ng-bind="subcategories.name"></span><br/>
    and subcategory : <span ng-bind="subcategory.id"></span> <span ng-bind="subcategory.name"></span>
    <pre ng-show='categories'>{{ categories | json }}</pre -->
    <?= $this->Form->create($house) ?>
    <fieldset>
        <legend><?= __('Add House') ?></legend>
        <div>
            Categories: 
            <select name="Category_id"
                    id="category-id" 
                    ng-model="category" 
                    ng-options="category.name for category in categories track by category.id"
                    >
                <option value=''>Select</option>
            </select>
        </div>
        <div>
            Subcategories: 
            <select name="subcategory_id"
                    id="subcategory-id" 
                    ng-disabled="!category" 
                    ng-model="subcategory"
                    ng-options="subcategory.name for subcategory in category.subcategories track by subcategory.id"
                    >
                <option value=''>Select</option>
            </select>
        </div>
        <?php
            echo $this->Form->control('city');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
