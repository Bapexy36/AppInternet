<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?></li>
        <li><hr/></li>
        <li><?= $this->Html->link(__('List Customer Orders'), ['controller' => 'CustomerOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Order'), ['controller' => 'CustomerOrders', 'action' => 'add']) ?></li>
        <li><hr/></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><hr/></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Add Files'), ['controller' => 'Files', 'action' => 'add']) ?></li>
        <li><hr/></li>
        <li><?= $this->Html->link(__('Manage Clothes'), ['controller' => 'Clothes', 'action' => 'index']) ?></li>
        <li><hr/></li>
        <li><?= $this->Html->link(__('Houses'), ['controller' => 'Houses', 'action' => 'index']) ?></li>
    </ul>
</nav>
    <div class="customers index large-9 medium-8 columns content">
        <h3><?= __('About') ?></h3>
        <h4><?= __('Infos') ?></h4>
        <ul>
            <li>
                <?= ('Charles Létourneau') ?>
            </li>
            <li>
                <?= ('420-5b7 MO Applications internet.') ?>
            </li>
            <li>
                <?= ('Automne 2019, Collège Montmorency.') ?>
            </li>
        </ul>
        <h4><?= __('How to use this website') ?></h4>
        <ul>
            <li>
                <?= __('Register for a new account using the Register button and validate your email to have
                normal access to the website') ?>
            </li>
            <li>
                <?= __('Create new product types, new products to be able to create "Orders"') ?>
            </li>
            <li>
                <?= __('You can add items in an order.') ?>
            </li>
            <li>
                <?= __('You can add an image in the file section.') ?>
            </li>
            <li>
                <?= __('You can manage the clothes in the clothes section by accessing it with the navigation toolbar.') ?>
            </li>
            <li>
                <?= __('The add and modification fonctionality in AJAX is not working, but the code is done.') ?>
            </li>
            <li>
                <?= __('Tou can view a pdf when you click on the small link beside the product in the product list.') ?>
            </li>
            <li>
                <?= __('The only thing that is not done is the Bootstrap interface.') ?>
            </li>
            <li>
                <?= __('Linked lists are in the House table, but they do not work. All the coding is done. You can access the Houses section in the menuon the left.') ?>
            </li>
            <li>
                <?= __('The CRUD operation with AngularJS are coded in the Clothes section, but only the add operation is working.') ?>
            </li>
            <li>
                <?= __('The Captcha appear in the login page.') ?>
            </li>
            <li>
                <?= __('The slide and drop fonction is done in the Files section(It is coded), but it does not work.') ?>
            </li>
            <li>
                <?= __('The only thing that is not done is the JWT token.') ?>
            </li>
        </ul>
        <h4><?= __('Users') ?></h4>
            <?= __('There are 3 types of users:') ?>
            <ul>
                <li>
                    <?= __('User: when the account is created but email isn\'t validated.') ?>
                    <br />
                    <?= __('They can view the database records but they can\'t add, edit or delete anything.') ?>
                    <br />
                    <?= __('user@gmail.com  |  password') ?>
                </li>
                <li>
                    <?= __('Super-user: when the user validates their account.') ?>
                    <br />
                    <?= __('They can add and edit new products, product types, files, customers and customer orders.') ?>
                    <br />
                    <?= __('superuser@gmail.com  |  password') ?>
                </li>
                <li>
                    <?= __('Admin: role only available to system administrators.') ?>
                    <br />
                    <?= __('They have access to all the add, edit and delete functions. They can also see IDs from the database.') ?>
                    <br />
                    <?= __('This role is dedicated for debugging and administrating purposes.') ?>
                    <br />
                    <?= __('admin@gmail.com  |  password') ?>
                </li>
            </ul>

        <h4><?= __('Here is the BD diagram') ?></h4>
        <hr />
        <img src="webroot/img/bd.jpg" width="600" height="600">
        <br />
        <?= __('With this link you can see the original diagram: ') ?>
        <br />
        <?= $this->Html->link('http://www.databaseanswers.org/data_models/customers_and_products/index.htm') ?>
        <hr />

        <br />
        <br />
        <br />
        <br />
        <br />
    </div>
