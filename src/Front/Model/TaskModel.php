<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Model;

use Admin\DataMapper\ProjectMapper;
use Admin\DataMapper\TaskLinkMapMapper;
use Admin\DataMapper\TaskMapper;
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

		$item->project = ProjectMapper::findOne(['id' => $item->project_id]);

		$item->project->tasks = TaskMapper::find(['project_id' => $item->project_id, 'state' => 1, 'id != ' . $item->id], 'ordering ASC');

		$item->link = TaskLinkMapMapper::findOne(['task_id' => $item->id], 'ordering ASC');
	}
}
