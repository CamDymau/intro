<?php


use Phinx\Seed\AbstractSeed;

class Comments extends AbstractSeed
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
                'user_id' => 2,
                'comments_text' => 'test text',
                'like_count' => 1,
                'created_date' =>  date('Y-m-d H:i:s'),
            ]
        ];

        $comments = $this->table('main_scheme.comments');

        $comments->insert($data)->saveData();
    }
}
