<?php
use Migrations\AbstractSeed;

/**
 * Products seed.
 */
class ProductsSeed extends AbstractSeed
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
                'id' => '1',
                'type_id' => '1',
                'name' => 'Black T-shirt',
                'price' => '13',
                'description' => 'A Basic black T-shirt for everyday use',
                'created' => '0000-00-00 00:00:00',
                'modified' => '0000-00-00 00:00:00',
            ],
        ];

        $table = $this->table('products');
        $table->insert($data)->save();
    }
}
