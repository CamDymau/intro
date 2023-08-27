<?php


use Phinx\Seed\AbstractSeed;

class News extends AbstractSeed
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
                'user_sender' => 1,
                'news_text' => 'test text',
                'like_count' => 1,
                'comment_id' => 1,
                'created_date' =>  date('Y-m-d H:i:s'),
            ]
        ];

        $news = $this->table('main_scheme.news');

        $news->insert($data)->saveData();
    }
}
