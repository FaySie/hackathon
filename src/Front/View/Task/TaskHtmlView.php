<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\View\Task;

use Admin\DataMapper\TaskMapper;
use Admin\Table\Table;
use Front\Helper\TaskHelper;
use Lyrasoft\Warder\Table\WarderTable;
use Phoenix\View\ItemView;

/**
 * The TaskHtmlView class.
 * 
 * @since  1.0
 */
class TaskHtmlView extends ItemView
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'Task';

	/**
	 * prepareData
	 *
	 * @param \Windwalker\Data\Data $data
	 *
	 * @return  void
	 */
	protected function prepareData($data)
	{
		parent::prepareData($data);

		$data->relateds = TaskMapper::addTable('user', WarderTable::USERS, 'task.created_by = user.id')
			->addTable('project', Table::PROJECTS, 'task.project_id = project.id')
			->find(['task.state' => 1, 'task.id != ' . $data->item->id], 'task.created DESC', 0, 6);

		foreach ($data->relateds as $related)
		{
			$related->image = TaskHelper::getFirstImage($related->id);
		}

		$this->prepareScripts();
		$this->prepareMetadata();
	}

	/**
	 * prepareDocument
	 *
	 * @return  void
	 */
	protected function prepareScripts()
	{
	}

	/**
	 * prepareMetadata
	 *
	 * @return  void
	 */
	protected function prepareMetadata()
	{
		$this->setTitle();
	}
}
