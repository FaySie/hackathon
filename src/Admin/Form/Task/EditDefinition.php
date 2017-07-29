<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\Form\Task;

use Admin\Field\Task\TaskListField;
use Admin\Field\Task\TaskModalField;
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

			// Image
			$this->text('image')
				->label(Translator::translate('admin.task.field.image'));

			// URL
			$this->text('url')
				->label(Translator::translate('admin.task.field.url'))
				->addValidator(Rule\UrlValidator::class)
				->set('class', 'validate-url');

			// Example: Task List
			$this->add('task_list', TaskListField::class)
				->label('List Example')
				->addClass('hasChosen');

			// Example: Task Modal
			$this->add('task_modal', TaskModalField::class)
				->label('Modal Example');
		});

		// Text Fieldset
		$this->fieldset('text', function(Form $form)
		{
			// Introtext
			$this->textarea('introtext')
				->label(Translator::translate('admin.task.field.introtext'))
				->rows(10);

			// Fulltext
			$this->textarea('fulltext')
				->label(Translator::translate('admin.task.field.fulltext'))
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

			// Created
			$this->calendar('created')
				->label(Translator::translate('admin.task.field.created'));

			// Modified
			$this->calendar('modified')
				->label(Translator::translate('admin.task.field.modified'))
				->disabled();

			// Author
			$this->text('created_by')
				->label(Translator::translate('admin.task.field.author'));

			// Modified User
			$this->text('modified_by')
				->label(Translator::translate('admin.task.field.modifiedby'))
				->disabled();
		});
	}
}
