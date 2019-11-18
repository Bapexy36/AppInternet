<?php
use Migrations\AbstractSeed;

/**
 * Orders seed.
 */
class OrdersSeed extends AbstractSeed
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
                'user_id' => '3',
                'order_date' => '2019-10-30 13:30:00',
                'created' => '2019-10-15 18:45:56',
                'modified' => NULL,
            ],
        ];

        $table = $this->table('orders');
        $table->insert($data)->save();
    }
}
