<?php

class m160526_133040_create_save_step_evidence extends EDbMigration
{
	public function up()
	{
		$this->createTable('save_steps_evidence', array(
			'id' => 'pk',
			'step1' => 'text NULL',
			'step2' => 'text NULL',
			'step3' => 'text NULL',
			'created_at' => 'datetime NOT NULL',
			'created_by' => 'int(11) NOT NULL',
			'updated_at' => 'datetime NOT NULL',
			'updated_by' => 'int(11) NOT NULL',
		), '');

	}

	public function down()
	{
		$this->dropTable("save_steps_evidence");
	}
}