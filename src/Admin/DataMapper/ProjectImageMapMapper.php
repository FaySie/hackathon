<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\DataMapper;

use Admin\Record\ProjectImageMapRecord;
use Admin\Table\Table;
use Windwalker\DataMapper\AbstractDatabaseMapperProxy;
use Windwalker\Event\Event;

/**
 * The ProjectImageMapMapper class.
 * 
 * @since  1.0
 */
class ProjectImageMapMapper extends AbstractDatabaseMapperProxy
{
	/**
	 * Property table.
	 *
	 * @var  string
	 */
	protected static $table = Table::PROJECT_IMAGE_MAPS;

	/**
	 * Property keys.
	 *
	 * @var  string
	 */
	protected static $keys = 'id';

	/**
	 * Property alias.
	 *
	 * @var  string
	 */
	protected static $alias = 'project_image_map';

	/**
	 * Property dataClass.
	 *
	 * @var  string
	 */
	protected static $dataClass = ProjectImageMapRecord::class;

	/**
	 * onAfterFind
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterFind(Event $event)
	{
		// Add your logic
	}

	/**
	 * onAfterCreate
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterCreate(Event $event)
	{
		// Add your logic
	}

	/**
	 * onAfterUpdate
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterUpdate(Event $event)
	{
		// Add your logic
	}

	/**
	 * onAfterDelete
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterDelete(Event $event)
	{
		// Add your logic
	}

	/**
	 * onAfterFlush
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterFlush(Event $event)
	{
		// Add your logic
	}

	/**
	 * onAfterUpdateAll
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterUpdateAll(Event $event)
	{
		// Add your logic
	}
}
