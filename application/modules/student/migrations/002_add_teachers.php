<?php

class Migration_Add_teachers extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ),
            'designation' => array(
                'type' => 'TEXT',
                'null' => true
            )
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('tbl_teachers');
    }

    public function down()
    {
        $this->dbforge->drop_table('tbl_teachers');
    }
}