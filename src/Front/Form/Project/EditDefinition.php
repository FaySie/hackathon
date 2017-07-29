<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Form\Project;

use Front\Field\Project\ProjectListField;
use Front\Field\Project\ProjectModalField;
use Phoenix\Form\PhoenixFieldTrait;
use Windwalker\Core\Form\AbstractFieldDefinition;
use Windwalker\Core\Language\Translator;
use Windwalker\Form\Form;
use Windwalker\Validator\Rule;

/**
 * The ProjectEditDefinition class.
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
				->label(Translator::translate('front.project.field.title'))
				->addFilter('trim')
				->required(true);

			// Alias
			$this->text('alias')
				->label(Translator::translate('front.project.field.alias'));

			// Image
			$this->text('image')
				->label(Translator::translate('front.project.field.image'));

			// URL
			$this->text('url')
				->label(Translator::translate('front.project.field.url'))
				->addValidator(Rule\UrlValidator::class)
				->set('class', 'validate-url');

			// Example: Project List
			$this->add('project_list', ProjectListField::class)
				->label('List Example')
				->addClass('hasChosen');

			// Example: Project Modal
			$this->add('project_modal', ProjectModalField::class)
				->label('Modal Example');
		});

		// Text Fieldset
		$this->fieldset('text', function(Form $form)
		{
			// Introtext
			$this->textarea('introtext')
				->label(Translator::translate('front.project.field.introtext'))
				->rows(10);

			// Fulltext
			$this->textarea('fulltext')
				->label(Translator::translate('front.project.field.fulltext'))
				->rows(10);
		});

		// Created fieldset
		$this->fieldset('created', function(Form $form)
		{
			// State
			$this->radio('state')
				->label(Translator::translate('front.project.field.state'))
				->addClass('btn-group hasChosen')
				->defaultValue(1)
				->option(Translator::translate('phoenix.grid.state.published'), '1')
				->option(Translator::translate('phoenix.grid.state.unpublished'), '0');

			// Created
			$this->calendar('created')
				->label(Translator::translate('front.project.field.created'));

			// Modified
			$this->calendar('modified')
				->label(Translator::translate('front.project.field.modified'))
				->disabled();

			// Author
			$this->text('created_by')
				->label(Translator::translate('front.project.field.author'));

			// Modified User
			$this->text('modified_by')
				->label(Translator::translate('front.project.field.modifiedby'))
				->disabled();
		});
	}
}
