<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\Controller\Tasks;

use Phoenix\Controller\Batch\AbstractDeleteController;

/**
 * The DeleteController class.
 *
 * @since  1.0
 */
class DeleteController extends AbstractDeleteController
{
	/**
	 * The default model.
	 *
	 * Keep model name here to make sure controller get singular model to handle delete.
	 *
	 * @var  string
	 */
	protected $model = 'Task';
}
