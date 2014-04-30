<?php
/**
 * Com
 *
 * @author      Dave Li <dave@moyoweb.nl>
 * @category    Nooku
 * @package     Socialhub
 * @subpackage  ...
 * @uses        Com_
 */
 
defined('KOOWA') or die('Protected resource');

class ComTermsControllerTag extends ComDefaultControllerDefault
{
	protected function _actionImport(KCommandContext $context)
	{
		$items = $this->getService('com://admin/terms.model.items')->getList();

		foreach($items as $item) {
			$row = $this->getService('com://admin/terms.model.tags')->id($item->id)->getItem();
			$row->setData(array(
				'id'	=> $item->id,
				'title' => $item->name
			));
			$row->save();
		}
	}
}