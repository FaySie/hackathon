<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\View\Home;

use Admin\DataMapper\TaskImageMapMapper;
use Admin\Table\Table;
use Phoenix\View\ListView;

/**
 * The HomeHtmlView class.
 * 
 * @since  1.0
 */
class HomeHtmlView extends ListView
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'Home';

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

		foreach ($data->items as $item)
		{
			$item->images = TaskImageMapMapper::addTable('product_image_map', Table::PROJECT_IMAGE_MAPS, 'task_image_map.project_id = product_image_map.project_id')
				->find(['task_image_map.project_id' => $item->project_id], 'task_image_map.ordering ASC')
				->image;
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
