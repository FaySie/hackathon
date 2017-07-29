<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2014 - 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

use Admin\Table\Table;
use Windwalker\Core\Migration\AbstractMigration;
use Windwalker\Database\Schema\Schema;

/**
 * Migration class of TaskInit.
 */
class TaskInit extends AbstractMigration
{
	/**
	 * Migrate Up.
	 */
	public function up()
	{
		$this->createTable(Table::TASKS, function(Schema $schema)
		{
			$schema->primary('id')->comment('Primary Key');
			$schema->integer('project_id')->comment('Project ID');
			$schema->varchar('title')->comment('Title');
			$schema->varchar('alias')->comment('Alias');
			$schema->varchar('ideal_time')->comment('Ideal Time');
			$schema->varchar('ideal_hits')->comment('Ideal Hits');
			$schema->text('description')->comment('Description');
			$schema->tinyint('state')->signed(true)->comment('0: unpublished, 1:published');
			$schema->integer('ordering')->comment('Ordering');
			$schema->datetime('created')->comment('Created Date');
			$schema->integer('created_by')->comment('Author');
			$schema->datetime('modified')->comment('Modified Date');
			$schema->integer('modified_by')->comment('Modified User');
			$schema->text('params')->comment('Params');

			$schema->addIndex('alias');
			$schema->addIndex('project_id');
			$schema->addIndex('state');
			$schema->addIndex('created_by');
		});

		$this->createTable(Table::TASK_IMAGE_MAPS, function(Schema $schema)
		{
			$schema->primary('id')->comment('Primary Key');
			$schema->integer('project_id')->comment('Project ID');
			$schema->integer('task_id')->comment('Task ID');
			$schema->integer('image_id')->comment('Image ID');
			$schema->integer('ordering')->comment('Ordering');
			$schema->text('params')->comment('Params');

			$schema->addIndex('project_id');
			$schema->addIndex('task_id');
			$schema->addIndex('image_id');
		});

		$this->createTable(Table::TASK_LINK_MAPS, function(Schema $schema)
		{
			$schema->primary('id')->comment('Primary Key');
			$schema->integer('project_id')->comment('Project ID');
			$schema->integer('task_id')->comment('Task ID');
			$schema->integer('image_id')->comment('Image ID');
			$schema->integer('top')->comment('Top');
			$schema->integer('left')->comment('Left');
			$schema->integer('width')->comment('Width');
			$schema->integer('height')->comment('Height');
			$schema->integer('ordering')->comment('Ordering');
			$schema->text('params')->comment('Params');

			$schema->addIndex('project_id');
			$schema->addIndex('task_id');
			$schema->addIndex('image_id');
		});
	}

	/**
	 * Migrate Down.
	 */
	public function down()
	{
		$this->drop(Table::TASKS);
		$this->drop(Table::TASK_IMAGE_MAPS);
		$this->drop(Table::TASK_LINK_MAPS);
	}
}
