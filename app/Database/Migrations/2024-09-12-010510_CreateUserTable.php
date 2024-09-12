<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
      $this->forge->addField([
        'id'=>[
            'type'=>'INT',
            'auto_increment'=>true
        ],
        'username'=>[
            'type'=>'VARCHAR',
            'constraint'=>100
        ],
        'password'=>[
            'type'=>'VARCHAR',
            'constraint'=>255
        ],   
        'Fullname'=>[
                'type'=>'VARCHAR',
                'constraint'=>100
        ],
        'email'=>[
            'type'=>'VARCHAR',
            'constraint'=>100
        ],
        'created_at'=>[
            'type'=>'DATETIME',
            'null'=>true
        ],
        'updated_at'=>[
            'type'=>'DATETIME',
            'null'=>true
        ]
      ])
    ;

      $this->forge->addkey('id',true);
      $this->forge->createTable('USERS');


        
        
      
    }

    public function down()
    {
        $this->forge->dropTable('USERS');
    }
}
