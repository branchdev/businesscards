<?php

class m130612_073231_create_user_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_users', array(
			'affiliate_id'=>'pk',
			'fname'=>'string NOT NULL',
			'lname'=>'string NOT NULL',
			'username'=>'string NOT NULL',
			'password'=>'string NOT NULL',
			'address'=>'string NOT NULL',
			'ein'=>'string',
			'sponsor_id'=>'string default NULL',
			'email'=>'string NOT NULL',
			'phone'=>'string NOT NULL',
			'created'=>'DATETIME default NULL',
			'lastvisit'=>'DATETIME default NULL',
			'status'=>'string NOT NULL',
			));
	}

	public function down()
	{
		$this->dropTable('tbl_users');
		
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}