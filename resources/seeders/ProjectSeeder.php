<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

use Admin\DataMapper\ProjectImageMapMapper;
use Admin\DataMapper\ProjectMapper;
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

		$prototypes = [
			'prototype1.jpg',
			'prototype2.png',
			'prototype5.jpg',
			'prototype8.jpg',
			'prototype12.jpg',
			'prototype13.jpg',
			'prototype14.jpg',
			'prototype15.jpg',
			'prototype16.jpg',
			'prototype17.jpg',
			'prototype18.jpg',
			'prototype19.jpg',
		];

		foreach (range(1, 50) as $i)
		{
			$created = $faker->dateTimeThisYear;

			$data = new Data;

			$data['title']       = trim($faker->sentence(mt_rand(3, 5)), '.');
			$data['alias']       = OutputFilter::stringURLSafe($data['title']);
			$data['type']        = $faker->randomElement(['app', 'web']);
			$data['description'] = '<p>' . $faker->paragraph(5) . '</p>';
			$data['is_public']   = $faker->randomElement([1, 1, 1, 1, 0, 0]);
			$data['state']       = $faker->randomElement([1, 1, 1, 1, 0, 0]);
			$data['created']     = $created->format($this->getDateFormat());
			$data['created_by']  = $faker->randomElement($userIds);
			$data['modified']    = $created->modify('+5 days')->format($this->getDateFormat());
			$data['modified_by'] = $faker->randomElement($userIds);
			$data['params']      = '';

			$project = ProjectMapper::createOne($data);

			foreach (range(1, mt_rand(5, 10)) as $j)
			{
				$data = new Data;

				$data['project_id'] = $project->id;
//				$data['image']      = UnsplashHelper::getImageUrl();
				$data['image']      = 'https://lyratest.s3.amazonaws.com/hackathon/images/projects/' . $faker->randomElement($prototypes);
				$data['params']     = '';

				ProjectImageMapMapper::createOne($data);
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
