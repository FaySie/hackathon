<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

use Admin\DataMapper\ProjectMapper;
use Admin\Table\Table;
use Faker\Factory;
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

		foreach (range(1, 150) as $i)
		{
			$created = $faker->dateTimeThisYear;
			$data = new Data;

			$data['title']       = trim($faker->sentence(mt_rand(3, 5)), '.');
			$data['alias']       = OutputFilter::stringURLSafe($data['title']);
			$data['url']         = $faker->url;
			$data['introtext']   = $faker->paragraph(5);
			$data['fulltext']    = $faker->paragraph(5);
			$data['image']       = $faker->imageUrl();
			$data['state']       = $faker->randomElement([1, 1, 1, 1, 0, 0]);
			$data['ordering']    = $i;
			$data['created']     = $created->format($this->getDateFormat());
			$data['created_by']  = 1;
			$data['modified']    = $created->modify('+5 days')->format($this->getDateFormat());
			$data['modified_by'] = 1;
			$data['language']    = 'en-GB';
			$data['params']      = '';

			ProjectMapper::createOne($data);

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
	}
}
