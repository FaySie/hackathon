<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

namespace Front;

use Phoenix\Language\TranslatorHelper;
use Phoenix\Script\BootstrapScript;
use Windwalker\Core\Asset\Asset;
use Windwalker\Core\Package\AbstractPackage;
use Windwalker\Core\Router\MainRouter;
use Windwalker\Debugger\Helper\DebuggerHelper;
use Windwalker\Filesystem\Folder;

if (!defined('PACKAGE_FRONT_ROOT'))
{
	define('PACKAGE_FRONT_ROOT', __DIR__);
}

/**
 * The FrontPackage class.
 *
 * @since  1.0
 */
class FrontPackage extends AbstractPackage
{
	/**
	 * initialise
	 *
	 * @throws  \LogicException
	 * @return  void
	 */
	public function boot()
	{
		parent::boot();
	}

	/**
	 * prepareExecute
	 *
	 * @return  void
	 */
	protected function prepareExecute()
	{
		$this->checkAccess();

		// Assets
		BootstrapScript::css();
		BootstrapScript::script();
		BootstrapScript::fontAwesome();

		Asset::addCSS('theme/assets/plugins/jquery-scrollbar/jquery.scrollbar.css');
		Asset::addCSS('theme/assets/plugins/switchery/css/switchery.min.css');
		Asset::addCSS('theme/assets/plugins/select2/css/select2.min.css');
		Asset::addCSS('theme/pages/css/pages-icons.css');
		Asset::addCSS('theme/pages/css/pages.css');
		Asset::addCSS('css/swiper.min.css');
		Asset::addCSS('nvd3/nv.d3.min.css');
		Asset::addCSS('css/main.css');
		Asset::addCSS('css/slick.css');
		Asset::addCSS('css/slick-theme.css');

		Asset::addJS('theme/assets/plugins/modernizr.custom.js');
		Asset::addJS('theme/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js');
		Asset::addJS('theme/assets/plugins/switchery/js/switchery.min.js');
		Asset::addJS('theme/assets/plugins/select2/js/select2.full.min.js');
		Asset::addJS('theme/pages/js/pages.min.js');
		Asset::addJS('js/swiper.min.js');
		Asset::addJS('theme/assets/js/scripts.js');
		Asset::addJS('js/slick.js');
		Asset::addJS('theme/assets/plugins/nvd3/lib/d3.v3.js');
		Asset::addJS('js/main.js');

		// Language
		TranslatorHelper::loadAll($this, 'ini');
	}

	/**
	 * checkAccess
	 *
	 * @return  void
	 */
	protected function checkAccess()
	{

	}

	/**
	 * postExecute
	 *
	 * @param string $result
	 *
	 * @return  string
	 */
	protected function postExecute($result = null)
	{
		if (WINDWALKER_DEBUG)
		{
			if (class_exists('Windwalker\Debugger\Helper\DebuggerHelper'))
			{
				DebuggerHelper::addCustomData('Language Orphans', '<pre>' . TranslatorHelper::getFormattedOrphans() . '</pre>');
			}
		}

		return $result;
	}

	/**
	 * loadRouting
	 *
	 * @param MainRouter $router
	 * @param string     $group
	 *
	 * @return MainRouter
	 */
	public function loadRouting(MainRouter $router, $group = null)
	{
		$router = parent::loadRouting($router, $group);

		$router->group($group, function (MainRouter $router)
		{
			$router->addRouteFromFiles(Folder::files(__DIR__ . '/Resources/routing'), $this->getName());

			// Merge other routes here...
		});

		return $router;
	}
}
