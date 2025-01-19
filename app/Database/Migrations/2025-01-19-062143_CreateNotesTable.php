<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNotesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER', // SQLite uses INTEGER for auto-incrementing
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'content' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME', // SQLite uses DATETIME
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME', // SQLite uses DATETIME
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME', // SQLite uses DATETIME
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('notes');
    }

    public function down()
    {
        $this->forge->dropTable('notes');
    }
}
