<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'password' => [
                'type' => 'VARCHAR', // Sesuaikan dengan tipe data yang sesuai
                'constraint' => 255, // Sesuaikan dengan kebutuhan
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('user');
    }


    public function down()
    {
        $this->forge->dropTable('user');
    }
}
