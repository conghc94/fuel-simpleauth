<?php

namespace Fuel\Migrations;

class Create_user_subject_execution_times
{
	public function up()
	{
		\DBUtil::create_table('user_subject_execution_times', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
                        'subject_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'execution_time' => array('type' => 'float'),

		), array('id'));
                
                \DBUtil::add_foreign_key('user_subject_execution_times', array(
                    'constraint' => 'user_subject_execution_times_fk_users',
                    'key' => 'user_id',
                    'reference' => array(
                        'table' => 'users',
                        'column' => 'id',
                    ),
                    'on_update' => 'CASCADE',
                    'on_delete' => 'RESTRICT'
                ));
                
                \DBUtil::add_foreign_key('user_subject_execution_times', array(
                    'constraint' => 'user_subject_execution_times_fk_subjects',
                    'key' => 'user_id',
                    'reference' => array(
                        'table' => 'subjects',
                        'column' => 'id',
                    ),
                    'on_update' => 'CASCADE',
                    'on_delete' => 'RESTRICT'
                ));
	}

	public function down()
	{
            \DBUtil::drop_table('user_subject_execution_times');
	}
}