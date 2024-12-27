<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooksTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'Nama Bunga' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'JenisBunga' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'Warna' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'JumlahStok' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'GambarBunga' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 16,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('books');
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
