<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\DataMapper;

use Front\Record\ProjectRecord;
use Windwalker\DataMapper\AbstractDatabaseMapperProxy;

/**
 * The ProjectMapper class.
 * 
 * @since  1.0
 */
class ProjectMapper extends AbstractDatabaseMapperProxy
{
	/**
	 * Property table.
	 *
	 * @var  string
	 */
	protected static $table = 'projects';

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
	protected static $alias = 'project';

	/**
	 * Property dataClass.
	 *
	 * @var  string
	 */
	protected static $dataClass = ProjectRecord::class;
}
