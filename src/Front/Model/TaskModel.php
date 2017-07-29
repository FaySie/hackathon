<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Model;

use Admin\DataMapper\TaskImageMapMapper;
use Admin\Table\Table;
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
		$item->image = TaskImageMapMapper::addTable('product_image_map', Table::PROJECT_IMAGE_MAPS, 'task_image_map.project_id = product_image_map.project_id')
			->findOne(['task_id' => $item->id], 'ordering ASC')
			->product_image_map_image;
	}
}
