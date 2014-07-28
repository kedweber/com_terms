<?php

defined('KOOWA') or die('Protected resource');

class ComTermsViewTagHtml extends ComTermsViewHtml
{
	/**
	 * @return string
	 */
	public function display()
	{
		$model = $this->getModel();

		$pathway = JFactory::getApplication()->getPathway();

		$pathway->addItem($model->getItem()->title);

		return parent::display();
	}
}