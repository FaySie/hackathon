<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Model;

use Front\Helper\TaskHelper;
use Phoenix\Model\ItemModel;
use Windwalker\Data\DataInterface;

/**
 * The TaskModel class.
 *
 * @since  1.0
 */
class TaskModel extends ItemModel
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'Task';

	/**
	 * postGetItem
	 *
	 * @param DataInterface $item
	 *
	 * @return  void
	 */
	protected function postGetItem(DataInterface $item)
	{
		$item->image = TaskHelper::getFirstImage($item->id);
	}
}
