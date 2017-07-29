<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

use Admin\DataMapper\ProjectImageMapMapper;
use Admin\DataMapper\ProjectMapper;
use Admin\DataMapper\TaskImageMapMapper;
use Admin\DataMapper\TaskLinkMapMapper;
use Admin\DataMapper\TaskMapper;
use Admin\DataMapper\UserTaskLikeMapMapper;
use Admin\Table\Table;
use Faker\Factory;
use Lyrasoft\Warder\Admin\DataMapper\UserMapper;
use Windwalker\Core\Seeder\AbstractSeeder;
use Windwalker\Data\Data;
use Windwalker\Filter\OutputFilter;

/**
 * The TaskSeeder class.
 *
 * @since  1.0
 */
class TaskSeeder extends AbstractSeeder
{
	/**
	 * doExecute
	 *
	 * @return  void
	 */
	public function doExecute()
	{
		$faker = Factory::create();

		$projects = ProjectMapper::findAll();
		$userIds  = UserMapper::findAll()->id;

		foreach ($projects as $project)
		{
			$projectImages = ProjectImageMapMapper::find(['project_id' => $project->id])->dump();

			foreach (range(1, mt_rand(5, 10)) as $i)
			{
				$created = $faker->dateTimeThisYear;

				$data = new Data;

				$data['project_id']  = $project->id;
				$data['title']       = trim($faker->sentence(mt_rand(3, 5)), '.');
				$data['alias']       = OutputFilter::stringURLSafe($data['title']);
				$data['ideal_time']  = mt_rand(60, 120);
				$data['ideal_hits']  = mt_rand(1, 5);
				$data['likes']       = mt_rand(10, 20);
				$data['hits']        = mt_rand(100, 500);
				$data['description'] = '<p>' . $faker->paragraph(5) . '</p>';
				$data['state']       = $faker->randomElement([1, 1, 1, 1, 0, 0]);
				$data['ordering']    = $i;
				$data['created']     = $created->format($this->getDateFormat());
				$data['created_by']  = $project->created_by;
				$data['modified']    = $created->modify('+5 days')->format($this->getDateFormat());
				$data['modified_by'] = $project->created_by;
				$data['params']      = '';

				$task = TaskMapper::createOne($data);

				$images = $faker->randomElements($projectImages, mt_rand(5, 10));

				foreach ($images as $j => $image)
				{
					$data = new Data;

					$data['project_id'] = $project->id;
					$data['task_id']    = $task->id;
					$data['image_id']   = $image->id;
					$data['ordering']   = $j + 1;
					$data['params']     = '';

					$taskImage = TaskImageMapMapper::createOne($data);

					$data = new Data;

					$data['project_id'] = $project->id;
					$data['task_id']    = $task->id;
					$data['image_id']   = $taskImage->id;
					$data['top']        = 250;
					$data['left']       = 350;
					$data['width']      = 100;
					$data['height']     = 50;
					$data['ordering']   = 1;
					$data['params']     = '';

					TaskLinkMapMapper::createOne($data);
				}

				$likeUserIds = $faker->randomElements($userIds, $project->likes);

				foreach ($likeUserIds as $likeUserId)
				{
					$data = new Data;

					$data['user_id']    = $likeUserId;
					$data['project_id'] = $project->id;
					$data['params']     = '';

					UserTaskLikeMapMapper::createOne($data);
				}

				$this->outCounting();
			}
		}
	}

	/**
	 * doClear
	 *
	 * @return  void
	 */
	public function doClear()
	{
		$this->truncate(Table::TASKS);
		$this->truncate(Table::TASK_IMAGE_MAPS);
		$this->truncate(Table::TASK_LINK_MAPS);
	}
}
