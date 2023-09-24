<?php


use Phinx\Seed\AbstractSeed;

class Photo extends AbstractSeed
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
                'path' => '/storage/' . sha1('1') . '.png',
                'name' => 'test',
                'mime_type' => 'image/png',
                'size' => 1,
                'like_count' => 0,
                'created_date' => date('Y-m-d H:i:s'),
            ]
        ];

        $comments = $this->table('main_scheme.user_photo');

        $comments->insert($data)->saveData();
    }
}
