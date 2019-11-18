<?php
use Migrations\AbstractSeed;

/**
 * FilesProducts seed.
 */
class FilesProductsSeed extends AbstractSeed
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
                'product_id' => '1',
                'file_id' => '1',
            ],
        ];

        $table = $this->table('files_products');
        $table->insert($data)->save();
    }
}
