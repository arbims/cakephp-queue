<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {

        $this->table('users')
        ->addColumn('name', 'string')
        ->addColumn('email', 'string')
        ->addColumn('full_name', 'string')
        ->create();
    }
}
