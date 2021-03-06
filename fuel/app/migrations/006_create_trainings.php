<?php

namespace Fuel\Migrations;

class Create_trainings
{
	public function up()
	{
		\DBUtil::create_table('trainings', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
                        'subject_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'time' => array('type' => 'datetime'),

		), array('id'));

                \DBUtil::add_foreign_key('trainings', array(
                    'constraint' => 'trainings_fk_subjects',
                    'key' => 'subject_id',
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
            \DBUtil::drop_table('trainings');
	}
}