<?php
use Migrations\AbstractSeed;

/**
 * OrdersProducts seed.
 */
class OrdersProductsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'order_id' => '1',
                'product_id' => '1',
            ],
        ];

        $table = $this->table('orders_products');
        $table->insert($data)->save();
    }
}
