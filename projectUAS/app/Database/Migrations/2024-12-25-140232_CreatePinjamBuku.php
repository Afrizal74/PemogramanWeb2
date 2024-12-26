<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePinjamBuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pinjam' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_buku' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'tgl_pinjam' => [
                'type' => 'DATE',
            ],
            'judul_buku' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'no_hp' => [
                'type' => 'INT',
                'constraint' => 16,
            ],
        ]);

        $this->forge->addKey('id_pinjam', true);
        $this->forge->addForeignKey('id_buku', 'books', 'id');
        $this->forge->createTable('peminjaman');
    }

    public function down()
    {
        $this->forge->dropTable('peminjaman');
    }
}
