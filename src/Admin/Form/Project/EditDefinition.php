<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\Form\Project;

use Admin\Field\Project\ProjectListField;
use Admin\Field\Project\ProjectModalField;
use Lyrasoft\Luna\Field\Editor\TinymceEditorField;
use Lyrasoft\Warder\Admin\Field\User\UserModalField;
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
				->label(Translator::translate('admin.project.field.title'))
				->addFilter('trim')
				->required(true);

			// Alias
			$this->text('alias')
				->label(Translator::translate('admin.project.field.alias'));

			// Type
			$this->list('type')
				->label(Translator::translate('admin.project.field.type'))
				->addClass('hasChosen')
				->option(Translator::translate('admin.project.field.type.app'), 'app')
				->option(Translator::translate('admin.project.field.type.web'), 'web')
				->required(true);

			// Description
			$this->add('description', TinymceEditorField::class)
				->label(Translator::translate('admin.project.field.description'))
				->rows(10)
				->required(true);
		});

		// Images fieldset
		$this->fieldset('images', function(Form $form)
		{
			// Image
//			$this->file('image')
//				->label(Translator::translate('admin.project.field.image'));
		});

		// Created fieldset
		$this->fieldset('created', function(Form $form)
		{
			// State
			$this->radio('state')
				->label(Translator::translate('admin.project.field.state'))
				->addClass('btn-group')
				->defaultValue(1)
				->option(Translator::translate('phoenix.grid.state.published'), '1')
				->option(Translator::translate('phoenix.grid.state.unpublished'), '0');

			// Is Public
			$this->radio('is_public')
				->label(Translator::translate('admin.project.field.is_public'))
				->addClass('btn-group')
				->defaultValue(1)
				->option(Translator::translate('admin.project.field.is_public.yes'), '1')
				->option(Translator::translate('admin.project.field.is_public.no'), '0');

			// Author
			$this->add('created_by', UserModalField::class)
				->label(Translator::translate('admin.project.field.author'))
				->readonly();

			// Created
			$this->calendar('created')
				->label(Translator::translate('admin.project.field.created'))
				->readonly();

			// Modified User
			$this->add('modified_by', UserModalField::class)
				->label(Translator::translate('admin.project.field.modifiedby'))
				->readonly();

			// Modified
			$this->calendar('modified')
				->label(Translator::translate('admin.project.field.modified'))
				->readonly();
		});
	}
}
