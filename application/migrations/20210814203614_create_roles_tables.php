<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_roles_tables extends CI_Migration
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
            'role_name' => array(
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
        $this->dbforge->create_table('roles');
    }

    public function down()
    {
        $this->dbforge->drop_table('roles');
    }
}
