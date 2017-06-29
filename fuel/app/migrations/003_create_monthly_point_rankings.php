<?php

namespace Fuel\Migrations;

class Create_monthly_point_rankings
{
    public function up()
    {
        \DBUtil::create_table('monthly_point_rankings', array(
            'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
            'user_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
            'point' => array('type' => 'float'),
            'year' => array('constraint' => 11, 'type' => 'int'),
            'month' => array('constraint' => 11, 'type' => 'int'),
        ), array('id')
        );
    }

    public function down()
    {
        \DBUtil::drop_table('monthly_point_rankings');
    }
}