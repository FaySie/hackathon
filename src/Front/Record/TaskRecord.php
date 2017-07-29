<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Record;

use Windwalker\Record\Record;

/**
 * The TaskRecord class.
 * 
 * @since  1.0
 */
class TaskRecord extends Record
{
	/**
	 * Property table.
	 *
	 * @var  string
	 */
	protected $table = 'tasks';

	/**
	 * Property keys.
	 *
	 * @var  string
	 */
	protected $keys = 'id';
}
