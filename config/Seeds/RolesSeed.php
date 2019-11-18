<?php
use Migrations\AbstractSeed;

/**
 * Roles seed.
 */
class RolesSeed extends AbstractSeed
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
                'title' => 'admin',
            ],
            [
                'id' => '2',
                'title' => 'superuser',
            ],
            [
                'id' => '3',
                'title' => 'user',
            ],
        ];

        $table = $this->table('roles');
        $table->insert($data)->save();
    }
}
