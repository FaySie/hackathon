<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\Record;

use Admin\Record\Traits\UserProjectLikeMapDataTrait;
use Admin\Table\Table;
use Windwalker\Event\Event;
use Windwalker\Record\Record;

/**
 * The UserProjectLikeMapRecord class.
 *
 * @since  1.0
 */
class UserProjectLikeMapRecord extends Record
{
	use UserProjectLikeMapDataTrait;

	/**
	 * Property table.
	 *
	 * @var  string
	 */
	protected $table = Table::USER_PROJECT_LIKE_MAPS;

	/**
	 * Property keys.
	 *
	 * @var  string
	 */
	protected $keys = 'id';

	/**
	 * onAfterLoad
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterLoad(Event $event)
	{
		// Add your logic
	}

	/**
	 * onAfterStore
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterStore(Event $event)
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
}
