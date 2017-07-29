<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Model;

use Phoenix\Model\ItemModel;
use Windwalker\Data\DataInterface;

/**
 * The ProjectModel class.
 * 
 * @since  1.0
 */
class ProjectModel extends ItemModel
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'Project';

	/**
	 * postGetItem
	 *
	 * @param DataInterface $item
	 *
	 * @return  void
	 */
	protected function postGetItem(DataInterface $item)
	{
	}
}
