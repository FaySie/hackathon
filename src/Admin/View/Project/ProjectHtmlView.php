<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\View\Project;

use Admin\DataMapper\ProjectImageMapMapper;
use Phoenix\Script\BootstrapScript;
use Phoenix\Script\PhoenixScript;
use Phoenix\View\EditView;
use Phoenix\View\ItemView;

/**
 * The ProjectHtmlView class.
 * 
 * @since  1.0
 */
class ProjectHtmlView extends EditView
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'Project';

	/**
	 * Property formDefinition.
	 *
	 * @var  string
	 */
	protected $formDefinition = 'Edit';

	/**
	 * Property formControl.
	 *
	 * @var  string
	 */
	protected $formControl = 'item';

	/**
	 * Property formLoadData.
	 *
	 * @var  boolean
	 */
	protected $formLoadData = true;

	/**
	 * prepareData
	 *
	 * @param \Windwalker\Data\Data $data
	 *
	 * @see  ItemView
	 * ------------------------------------------------------
	 * @var  $data->state  \Windwalker\Registry\Registry
	 * @var  $data->item   \Admin\Record\ProjectRecord
	 *
	 * @see  EditView
	 * ------------------------------------------------------
	 * @var  $data->form   \Windwalker\Form\Form
	 *
	 * @return  void
	 */
	protected function prepareData($data)
	{
		parent::prepareData($data);

		$data->item->images = ProjectImageMapMapper::find(['project_id' => $data->item->id])->image;

		$this->prepareScripts();
		$this->prepareMetadata();
	}

	/**
	 * prepareDocument
	 *
	 * @return  void
	 */
	protected function prepareScripts()
	{
		PhoenixScript::core();
		PhoenixScript::chosen('select.hasChosen');
		PhoenixScript::formValidation();
		BootstrapScript::checkbox(BootstrapScript::FONTAWESOME);
		BootstrapScript::buttonRadio();
		BootstrapScript::tooltip();
	}

	/**
	 * prepareMetadata
	 *
	 * @return  void
	 */
	protected function prepareMetadata()
	{
		$this->setTitle();
	}
}
