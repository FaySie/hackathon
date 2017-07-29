<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\Form\Task;

use Admin\Field\Project\ProjectModalField;
use Admin\Field\Task\TaskListField;
use Admin\Field\Task\TaskModalField;
use Lyrasoft\Luna\Field\Editor\TinymceEditorField;
use Lyrasoft\Warder\Admin\Field\User\UserModalField;
use Phoenix\Form\PhoenixFieldTrait;
use Windwalker\Core\Form\AbstractFieldDefinition;
use Windwalker\Core\Language\Translator;
use Windwalker\Form\Form;
use Windwalker\Validator\Rule;

/**
 * The TaskEditDefinition class.
 *
 * @since  1.0
 */
class EditDefinition extends AbstractFieldDefinition
{
	use PhoenixFieldTrait;

	/**
	 * Define the form fields.
	 *
	 * @param Form $form The Windwalker form object.
	 *
	 * @return  void
	 *
	 * @throws \InvalidArgumentException
	 */
	public function doDefine(Form $form)
	{
		// Basic fieldset
		$this->fieldset('basic', function(Form $form)
		{
			// ID
			$this->hidden('id');

			// Title
			$this->text('title')
				->label(Translator::translate('admin.task.field.title'))
				->addFilter('trim')
				->required(true);

			// Alias
			$this->text('alias')
				->label(Translator::translate('admin.task.field.alias'));

			// Project
			$this->add('project_id', ProjectModalField::class)
				->label(Translator::translate('admin.task.field.project'));

			// Ideal Time
			$this->text('ideal_time')
				->label(Translator::translate('admin.task.field.ideal_time'))
				->required(true);

			// Ideal Hits
			$this->text('ideal_hits')
				->label(Translator::translate('admin.task.field.ideal_hits'))
				->required(true);

			// Description
			$this->add('description', TinymceEditorField::class)
				->label(Translator::translate('admin.task.field.description'))
				->rows(10);
		});

		// Created fieldset
		$this->fieldset('created', function(Form $form)
		{
			// State
			$this->radio('state')
				->label(Translator::translate('admin.task.field.state'))
				->addClass('btn-group hasChosen')
				->defaultValue(1)
				->option(Translator::translate('phoenix.grid.state.published'), '1')
				->option(Translator::translate('phoenix.grid.state.unpublished'), '0');

			// Author
			$this->add('created_by', UserModalField::class)
				->label(Translator::translate('admin.task.field.author'));

			// Created
			$this->calendar('created')
				->label(Translator::translate('admin.task.field.created'));

			// Modified User
			$this->add('modified_by', UserModalField::class)
				->label(Translator::translate('admin.task.field.modifiedby'))
				->disabled();

			// Modified
			$this->calendar('modified')
				->label(Translator::translate('admin.task.field.modified'))
				->disabled();
		});
	}
}
