<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\View\Home;

use Front\Helper\TaskHelper;
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
			$item->image = TaskHelper::getFirstImage($item->id);
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
