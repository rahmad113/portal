<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profil extends Migration
{
    public function up()
    {
        // Create table for storing profil
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id_user'          => [
				'type'           => 'INT',
				'constraint'     => 11,
                'unsigned'       => true,
				'auto_increment' => true
			
			],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],

            'nip' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],

			'jabatan_kerja' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'nama_instansi'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
			'tingkat_satuan_kerja'      => [
				'type'           => 'ENUM',
				'constraint'     => ['Provinsi','Kabupaten/Kota'],
				'default'        => 'Provinsi',
			],
            'no_telepon'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'picture'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			]
            ]);
            $this->forge->addKey('id_user', true);
            $this->db->enableForeignKeyChecks();
            $this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');
            $this->db->disableForeignKeyChecks();
            $this->forge->createTable('profil');
    }

    public function down()
    {
        //
    }
}
