<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products1Migration extends Migration
{
    public function up()
    {
      
	
	
	
	
	
	 

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'price' => [
                'type' => 'TEXT',

            ],
            'sku' => [
                'type' => 'varchar',
                'constraint' => '50',
            ],
            'model' => [
                'type' => 'varchar',
                'constraint' => '50',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('product1');

    }

    public function down()
    {
        $this->forge->dropTable('product1');
    }
}
