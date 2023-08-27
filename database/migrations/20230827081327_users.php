<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Users extends AbstractMigration
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
        $table = $this->table('main_scheme.users');

        $table
            ->addColumn('name', 'string', ['limit' => 100])
            ->addColumn('second_name', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('login', 'string', ['limit' => 50])
            ->addColumn('password', 'string')
            ->addColumn('photo', 'text', ['null' => true])
            ->addColumn('birth_date', 'datetime')
            ->addColumn('created_date', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addIndex('login', ['unique' => true])
            ->create();
    }
}
