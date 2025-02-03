<?php

class Migration_Add_messages extends CI_Migration
{
    public function up()
    {
        // create table structure
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true
            ),
            'subject' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ),
            'message' => array(
                'type' => 'TEXT',
                'null' => true
            )
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('tbl_add_messages');
    }

    public function down()
    {
        // drop table structure
    }
}