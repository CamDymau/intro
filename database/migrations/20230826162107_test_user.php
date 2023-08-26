<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TestUser extends AbstractMigration
{
    public function change(): void
    {
        // Создаем таблицу, поле id с автоинкрементом создастся автоматически
        $table = $this->table('main_scheme.test_users');

        // Добавляем колонки в таблицу
        $table->addColumn('content', 'text')
            ->addColumn('date_time', 'datetime')
            ->create();
    }
}
