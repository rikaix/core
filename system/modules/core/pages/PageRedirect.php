<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Core
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Contao;


/**
 * Class PageRedirect
 *
 * Provide methods to handle a redirect page.
 * @copyright  Leo Feyer 2005-2012
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Core
 */
class PageRedirect extends \Frontend
{

	/**
	 * Redirect to an external page
	 * @param object
	 */
	public function generate($objPage)
	{
		$this->redirect($objPage->url, (($objPage->redirect == 'temporary') ? 302 : 301));
	}
}
