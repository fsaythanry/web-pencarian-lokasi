<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alternative extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_alternative'    => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'           => 'varchar',
                'constraint'     => 100,
            ],
            'code' => [
                'type'           => 'varchar',
                'constraint'     => 10,
            ],
        ]);
        $this->forge->addKey('id_alternative', true);
        $this->forge->createTable('alternative');
    }

    public function down()
    {
        $this->forge->dropTable('alternative');
    }
}