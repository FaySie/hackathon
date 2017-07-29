<?php
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2014 {ORGANIZATION}. All rights reserved.
 * @license    GNU Lesser General Public License version 3 or later.
 */

use Windwalker\Core\Seeder\AbstractSeeder;

date_default_timezone_set('UTC');

/**
 * The MainSeeder class.
 * 
 * @since  {DEPLOY_VERSION}
 */
class MainSeeder extends AbstractSeeder
{
	/**
	 * doExecute
	 *
	 * @return  void
	 */
	public function doExecute()
	{
		$this->execute(UserSeeder::class);

		$this->execute(ProjectSeeder::class);

		$this->execute(TaskSeeder::class);
	}

	/**
	 * doClear
	 *
	 * @return  void
	 */
	public function doClear()
	{
		$this->clear(UserSeeder::class);

		$this->clear(ProjectSeeder::class);

		$this->clear(TaskSeeder::class);
	}
}
