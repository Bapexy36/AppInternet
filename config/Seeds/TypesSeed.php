<?php
use Migrations\AbstractSeed;

/**
 * Types seed.
 */
class TypesSeed extends AbstractSeed
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
                'type' => 'T-shirt',
                'created' => '0000-00-00 00:00:00',
                'modified' => '0000-00-00 00:00:00',
            ],
            [
                'id' => '2',
                'type' => 'Jean',
                'created' => '0000-00-00 00:00:00',
                'modified' => '0000-00-00 00:00:00',
            ],
        ];

        $table = $this->table('types');
        $table->insert($data)->save();
    }
}
