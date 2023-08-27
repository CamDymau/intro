<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TextMessages extends AbstractMigration
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
        $table = $this->table('main_scheme.text_messages', ['id' => false, 'primary_key' => 'id_message']);

        $table
            ->addColumn('id_message', 'integer')
            ->addColumn('message_text', 'text')
            ->create();
    }
}
