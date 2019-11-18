<?php
use Migrations\AbstractSeed;

/**
 * Subcategories seed.
 */
class SubcategoriesSeed extends AbstractSeed
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
                'name' => 'Quebec',
            ],
            [
                'id' => '2',
                'category_id' => '1',
                'name' => 'Ontario',
            ],
            [
                'id' => '3',
                'category_id' => '2',
                'name' => 'New-York',
            ],
            [
                'id' => '4',
                'category_id' => '2',
                'name' => 'Florida',
            ],
        ];

        $table = $this->table('subcategories');
        $table->insert($data)->save();
    }
}
