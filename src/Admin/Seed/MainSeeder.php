<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

use Windwalker\Core\Seeder\AbstractSeeder;

/**
 * The MainSeeder class.
 * 
 * @since  1.0
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
		$this->execute(ProjectSeeder::class);

		$this->execute(TaskSeeder::class);

		// @muse-placeholder  seeder-execute  Do not remove this.
	}

	/**
	 * doClear
	 *
	 * @return  void
	 */
	public function doClear()
	{
		$this->clear(ProjectSeeder::class);

		$this->clear(TaskSeeder::class);

		// @muse-placeholder  seeder-clear  Do not remove this.
	}
}
