<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBukuTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'cover' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'penulis' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'tahun' => [
                'type' => 'INT',
                'constraint' => 5
            ],
            'bahasa' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ]
        ]);
        $this->forge->addkey('id', true);
        $this->forge->createTable('books');
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}