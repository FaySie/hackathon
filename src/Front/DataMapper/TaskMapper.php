<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\DataMapper;

use Front\Record\TaskRecord;
use Windwalker\DataMapper\AbstractDatabaseMapperProxy;

/**
 * The TaskMapper class.
 * 
 * @since  1.0
 */
class TaskMapper extends AbstractDatabaseMapperProxy
{
	/**
	 * Property table.
	 *
	 * @var  string
	 */
	protected static $table = 'tasks';

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
	protected static $alias = 'task';

	/**
	 * Property dataClass.
	 *
	 * @var  string
	 */
	protected static $dataClass = TaskRecord::class;
}
