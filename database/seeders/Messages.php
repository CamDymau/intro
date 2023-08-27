<?php


use Phinx\Seed\AbstractSeed;

class Messages extends AbstractSeed
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
                'hash_chat' => hash('sha256', 'test_message'),
                'user_id1' => 1,
                'user_id2' => 2,
                'sender' => 1,
                'changed' => false,
                'created_date' => date('Y-m-d H:i:s'),
            ],
            [
                'hash_chat' => hash('sha256', 'test_message'),
                'user_id1' => 2,
                'user_id2' => 1,
                'sender' => 2,
                'changed' => false,
                'created_date' => date('Y-m-d H:i:s', strtotime("+1 days")),
            ],
        ];

        $messages = $this->table('main_scheme.messages');

        $messages->insert($data)->saveData();
    }
}
