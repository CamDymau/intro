<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Friends extends AbstractMigration
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
        $table = $this->table('main_scheme.friends');

        $table
            ->addColumn('user_id1', 'integer')
            ->addColumn('user_id2', 'integer')
            ->addColumn('status', 'integer', [
                'comment' => '0 - send friend request (user1 to user2);
                              1 - friend;
                              2 - user1 ban user2;
                              3 - user2 ban user1'])
            ->addColumn('created_date', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
