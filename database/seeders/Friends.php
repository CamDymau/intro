<?php


use Phinx\Seed\AbstractSeed;

class Friends extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $data = [
            [
                'user_id1' => 1,
                'user_id2' => 2,
                'status' => 1,
                'created_date' => date('Y-m-d H:i:s'),
            ]
        ];

        $friends = $this->table('main_scheme.friends');

        $friends->insert($data)->saveData();
    }
}
