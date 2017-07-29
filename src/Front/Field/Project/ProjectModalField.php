<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Field\Project;

use Front\Table\Table;
use Phoenix\Field\ModalField;

/**
 * The ProjectModalField class.
 *
 * @since  1.0
 */
class ProjectModalField extends ModalField
{
	/**
	 * Property table.
	 *
	 * @var  string
	 */
	protected $table = Table::PROJECTS;

	/**
	 * Property view.
	 *
	 * @var  string
	 */
	protected $view = 'projects';

	/**
	 * Property package.
	 *
	 * @var  string
	 */
	protected $package = 'front';

	/**
	 * Property titleField.
	 *
	 * @var  string
	 */
	protected $titleField = 'title';

	/**
	 * Property keyField.
	 *
	 * @var  string
	 */
	protected $keyField = 'id';
}
