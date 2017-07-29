<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Controller\Projects;

use Phoenix\Controller\Batch\AbstractCopyController;

/**
 * The CopyController class.
 *
 * @since  1.0
 */
class CopyController extends AbstractCopyController
{
	/**
	 * The default model.
	 *
	 * Keep model name here to make sure controller get singular model to handle copy.
	 *
	 * @var  string
	 */
	protected $model = 'Project';
}
