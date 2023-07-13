<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produks extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'gambar'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'content' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'status'      => [
                'type'           => 'ENUM',
                'constraint'     => ['ready', 'not ready'],
                'default'        => 'ready',
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('produks', TRUE);
    }

    //-------------------------------------------------------

    public function down()
    {
        // menghapus tabel news
        $this->forge->dropTable('produks');
    }
}
