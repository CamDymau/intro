<?php


use Phinx\Seed\AbstractSeed;

class TextMessages extends AbstractSeed
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
                'id_message' => 1,
                'message_text' => '1 test text',
            ],
            [
                'id_message' => 2,
                'message_text' => '2 test text',
            ],
        ];

        $text_messages = $this->table('main_scheme.text_messages');

        $text_messages->insert($data)->saveData();
    }
}
