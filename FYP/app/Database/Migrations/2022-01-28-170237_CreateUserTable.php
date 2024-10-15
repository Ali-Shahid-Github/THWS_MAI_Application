<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
                'null' => false,
            ],

            'user_name' => [
                'type'   => 'VARCHAR',
                'constraint' => '30',
                'null' => false,
              
            ],

            'user_email' => [
                'type'   => 'VARCHAR',
                'constraint' => '100',
                'unique'=> true,
                'null' => false,
              
            ],

            'user_password' => [
                'type'   => 'VARCHAR',
                'constraint' => '10',
                'null' => false,
            ],

            'user_phoneNumber' => [
                'type'   => 'VARCHAR',
                'constraint' => '14',
                'null' => false,
            ],

            'user_type' => [
                'type'   => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
        ]);

        $this->forge->addPrimaryKey('user_id');
        $this->forge->createTable('User');
    }

    public function down()
    {
        $this->forge->dropTable('User');
    }
}
