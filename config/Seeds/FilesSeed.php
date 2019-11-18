<?php
use Migrations\AbstractSeed;

/**
 * Files seed.
 */
class FilesSeed extends AbstractSeed
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
                'name' => 'Moon.jpg',
                'path' => 'Files/',
                'created' => '2019-10-03 00:00:00',
                'modified' => '2019-10-05 00:00:00',
                'status' => '1',
            ],
        ];

        $table = $this->table('files');
        $table->insert($data)->save();
    }
}
