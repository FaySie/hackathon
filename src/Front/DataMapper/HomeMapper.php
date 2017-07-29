<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\DataMapper;

use Front\Record\HomeRecord;
use Windwalker\DataMapper\AbstractDatabaseMapperProxy;

/**
 * The HomeMapper class.
 * 
 * @since  1.0
 */
class HomeMapper extends AbstractDatabaseMapperProxy
{
	/**
	 * Property table.
	 *
	 * @var  string
	 */
	protected static $table = 'home';

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
	protected static $alias = 'home';

	/**
	 * Property dataClass.
	 *
	 * @var  string
	 */
	protected static $dataClass = HomeRecord::class;
}
