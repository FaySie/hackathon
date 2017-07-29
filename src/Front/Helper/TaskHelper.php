<?php
/**
 * Part of hackathon project.
 *
 * @copyright  Copyright (C) 2017 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Helper;

use Admin\DataMapper\TaskImageMapMapper;
use Admin\Table\Table;
use Windwalker\Core\View\Helper\AbstractHelper;

/**
 * The TaskHelper class.
 *
 * @since  {DEPLOY_VERSION}
 */
class TaskHelper extends AbstractHelper
{
	/**
	 * getFirstImage
	 *
	 * @param int $task_id
	 *
	 * @return  string
	 */
	public static function getFirstImage($task_id)
	{
		$image = TaskImageMapMapper::addTable('product_image_map', Table::PROJECT_IMAGE_MAPS, 'task_image_map.image_id = product_image_map.id')
			->findOne(['task_id' => $task_id], 'ordering ASC')
			->product_image_map_image;

		return $image;
	}
}
