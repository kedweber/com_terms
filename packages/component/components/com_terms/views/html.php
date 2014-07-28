<?php

defined('KOOWA') or die('Protected resource');

class ComTermsViewHtml extends ComDefaultViewHtml
{
	/**
	 * @param KConfig $config
	 */
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'template_filters' => array('module'),
		));

		parent::_initialize($config);
	}
}