<?php


use Phinx\Seed\AbstractSeed;

class Users extends AbstractSeed
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
                'name' => 'test1',
                'login' => 'test_login',
                'password' => 'test_pass_1',
                'birth_date' => '01.01.1990',
                'created_date' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'test2',
                'login' => 'test2_login',
                'password' => 'test_pass_2',
                'birth_date' => '01.01.1990',
                'created_date' => date('Y-m-d H:i:s'),
            ]
        ];

        $users = $this->table('main_scheme.users');

        $users->insert($data)->saveData();
    }
}
