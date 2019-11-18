<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$Uur6dWKcej/GcIgTzvQcp.NxDc.t.AKhf7fjvBdBcvy1cD6l5GQG2',
                'created' => NULL,
                'modified' => NULL,
                'id_role' => '1',
                'uuid' => '',
                'active' => '1',
            ],
            [
                'id' => '2',
                'email' => 'superuser@gmail.com',
                'password' => '$2y$10$Uur6dWKcej/GcIgTzvQcp.NxDc.t.AKhf7fjvBdBcvy1cD6l5GQG2',
                'created' => NULL,
                'modified' => NULL,
                'id_role' => '2',
                'uuid' => '',
                'active' => '1',
            ],
            [
                'id' => '3',
                'email' => 'user@gmail.com',
                'password' => '$2y$10$Uur6dWKcej/GcIgTzvQcp.NxDc.t.AKhf7fjvBdBcvy1cD6l5GQG2',
                'created' => '2019-10-15 04:22:34',
                'modified' => NULL,
                'id_role' => '3',
                'uuid' => '',
                'active' => '1',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
