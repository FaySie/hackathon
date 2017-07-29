<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2014 - 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

use Admin\Table\Table;
use Windwalker\Core\Migration\AbstractMigration;
use Windwalker\Database\Schema\Schema;

/**
 * Migration class of ProjectInit.
 */
class ProjectInit extends AbstractMigration
{
	/**
	 * Migrate Up.
	 */
	public function up()
	{
		$this->createTable(Table::PROJECTS, function(Schema $schema)
		{
			$schema->primary('id')->comment('Primary Key');
			$schema->varchar('title')->comment('Title');
			$schema->varchar('alias')->comment('Alias');
			$schema->char('type')->length(3)->comment('app or web');
			$schema->text('description')->comment('Description');
			$schema->tinyint('is_public')->signed(true)->comment('0: no, 1:yes');
			$schema->tinyint('state')->signed(true)->comment('0: unpublished, 1:published');
			$schema->datetime('created')->comment('Created Date');
			$schema->integer('created_by')->comment('Author');
			$schema->datetime('modified')->comment('Modified Date');
			$schema->integer('modified_by')->comment('Modified User');
			$schema->text('params')->comment('Params');

			$schema->addIndex('alias');
			$schema->addIndex('type');
			$schema->addIndex('is_public');
			$schema->addIndex('state');
			$schema->addIndex('created_by');
		});

		$this->createTable(Table::PROJECT_IMAGE_MAPS, function(Schema $schema)
		{
			$schema->primary('id')->comment('Primary Key');
			$schema->integer('project_id')->comment('Project ID');
			$schema->varchar('image')->comment('Image');
			$schema->text('params')->comment('Params');

			$schema->addIndex('project_id');
		});
	}

	/**
	 * Migrate Down.
	 */
	public function down()
	{
		$this->drop(Table::PROJECTS);
	}
}
