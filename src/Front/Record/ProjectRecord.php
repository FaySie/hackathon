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
 * The ProjectRecord class.
 * 
 * @since  1.0
 */
class ProjectRecord extends Record
{
	/**
	 * Property table.
	 *
	 * @var  string
	 */
	protected $table = 'projects';

	/**
	 * Property keys.
	 *
	 * @var  string
	 */
	protected $keys = 'id';
}
