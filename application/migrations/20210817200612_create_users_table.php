<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_users_table extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            'first_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
            ),
            'modified_at' => array(
                'type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
            ),

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
