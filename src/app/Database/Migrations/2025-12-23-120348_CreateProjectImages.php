<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProjectImages extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'project_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'image_path' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'uploaded_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('project_id', 'project_list', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('project_images');
    }

    public function down()
    {
        $this->forge->dropTable('project_images');
    }
}
