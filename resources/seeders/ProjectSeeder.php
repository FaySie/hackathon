<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

use Admin\DataMapper\ProjectImageMapMapper;
use Admin\DataMapper\ProjectMapper;
use Admin\DataMapper\UserProjectLikeMapMapper;
use Admin\Table\Table;
use Faker\Factory;
use Lyrasoft\Unidev\Helper\UnsplashHelper;
use Lyrasoft\Warder\Admin\DataMapper\UserMapper;
use Windwalker\Core\Seeder\AbstractSeeder;
use Windwalker\Data\Data;
use Windwalker\Filter\OutputFilter;

/**
 * The ProjectSeeder class.
 *
 * @since  1.0
 */
class ProjectSeeder extends AbstractSeeder
{
	/**
	 * doExecute
	 *
	 * @return  void
	 */
	public function doExecute()
	{
		$faker = Factory::create();

		$userIds = UserMapper::findAll()->id;

		foreach (range(1, 50) as $i)
		{
			$created = $faker->dateTimeThisYear;

			$data = new Data;

			$data['title']       = trim($faker->sentence(mt_rand(3, 5)), '.');
			$data['alias']       = OutputFilter::stringURLSafe($data['title']);
			$data['type']        = $faker->randomElement(['app', 'web']);
			$data['likes']       = mt_rand(10, 20);
			$data['hits']        = mt_rand(100, 500);
			$data['description'] = '<p>' . $faker->paragraph(5) . '</p>';
			$data['is_public']   = $faker->randomElement([1, 1, 1, 1, 0, 0]);
			$data['state']       = $faker->randomElement([1, 1, 1, 1, 0, 0]);
			$data['created']     = $created->format($this->getDateFormat());
			$data['created_by']  = $faker->randomElement($userIds);
			$data['modified']    = $created->modify('+5 days')->format($this->getDateFormat());
			$data['modified_by'] = $faker->randomElement($userIds);
			$data['params']      = '';

			$project = ProjectMapper::createOne($data);

			foreach (range(1, mt_rand(10, 20)) as $j)
			{
				$data = new Data;

				$data['project_id'] = $project->id;
				$data['image']      = UnsplashHelper::getImageUrl();
				$data['params']     = '';

				ProjectImageMapMapper::createOne($data);
			}

			$likeUserIds = $faker->randomElements($userIds, $project->likes);

			foreach ($likeUserIds as $likeUserId)
			{
				$data = new Data;

				$data['user_id'] = $likeUserId;
				$data['project_id'] = $project->id;
				$data['params']     = '';

				UserProjectLikeMapMapper::createOne($data);
			}

			$this->outCounting();
		}
	}

	/**
	 * doClear
	 *
	 * @return  void
	 */
	public function doClear()
	{
		$this->truncate(Table::PROJECTS);
		$this->truncate(Table::PROJECT_IMAGE_MAPS);
	}
}
