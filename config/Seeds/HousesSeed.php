<?php
use Migrations\AbstractSeed;

/**
 * Houses seed.
 */
class HousesSeed extends AbstractSeed
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
                'category_id' => '1',
                'subcategory_id' => '1',
                'city' => 'Montreal',
            ],
            [
                'id' => '2',
                'category_id' => '2',
                'subcategory_id' => '3',
                'city' => 'New-york',
            ],
            [
                'id' => '3',
                'category_id' => '1',
                'subcategory_id' => '1',
                'city' => 'Laval',
            ],
        ];

        $table = $this->table('houses');
        $table->insert($data)->save();
    }
}
