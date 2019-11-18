<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Orders') ?></h4>
        <?php if (!empty($product->orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                
            </tr>
            <?php foreach ($product->file as $files): ?>
            <tr>
                <td><?= h($orders->name) ?></td>
                <td><?= h($orders->path) ?></td>
                <td><?= h($orders->status) ?></td>
                <td><?= h($orders->created) ?></td>
                <td><?= h($orders->modified) ?></td>
            </tr>
            <?php endforeach; ?>
            <?php foreach ($product->orders as $orders): ?>
            <tr>
                <td><?= h($orders->name) ?></td>
                <td><?= h($orders->path) ?></td>
                <td><?= h($orders->status) ?></td>
                <td><?= h($orders->created) ?></td>
                <td><?= h($orders->modified) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
