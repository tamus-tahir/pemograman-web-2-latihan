<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_mahasiswa' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'nim' => [
                'type' => 'INT',
            ],
            'gender' => [
                'type' => 'INT',
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null' => TRUE,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null' => TRUE,
            ],
        ]);
        $this->forge->addKey('id_mahasiswa', true);
        $this->forge->createTable('tabel_mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('tabel_mahasiswa');
    }
}
