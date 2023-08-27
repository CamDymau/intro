<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class News extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('main_scheme.news');

        $table
            ->addColumn('user_sender', 'integer')
            ->addColumn('photo', 'text', ['null' => true])
            ->addColumn('news_text', 'text', ['null' => true])
            ->addColumn('like_count', 'integer')
            ->addColumn('comment_id', 'integer')
            ->addColumn('created_date', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
