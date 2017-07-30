<?php
/**
 * Part of hackathon project.
 *
 * @copyright  Copyright (C) 2017 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Controller\Task;

use Admin\DataMapper\ProjectImageMapMapper;
use Admin\DataMapper\TaskLinkMapMapper;
use Admin\Table\Table;
use Windwalker\Core\Controller\AbstractController;
use Windwalker\Core\Controller\Traits\JsonApiTrait;
use Windwalker\Core\Widget\WidgetHelper;

/**
 * The NextStepController class.
 *
 * @since  {DEPLOY_VERSION}
 */
class NextStepController extends AbstractController
{
	use JsonApiTrait;

	/**
	 * The main execution process.
	 *
	 * @return  mixed
	 */
	protected function doExecute()
	{
		$taskId  = $this->input->getInt('task_id');
		$linkId = $this->input->getInt('link_id');

		if (!$taskId || !$linkId)
		{
			throw new \Exception('error');
		}

		$image = ProjectImageMapMapper::findOne(['id' => $linkId]);
		$link  = TaskLinkMapMapper::addTable('task_image_map', Table::TASK_IMAGE_MAPS, 'task_link_map.image_id = task_image_map.id')
			->findOne(['task_link_map.task_id' => $taskId, 'task_image_map.image_id' => $linkId]);

		$html = WidgetHelper::render('widget.test-area', ['image' => $image->image, 'link' => $link, 'task_id' => $taskId], 'edge');

		return ['html' => $html];
	}
}
