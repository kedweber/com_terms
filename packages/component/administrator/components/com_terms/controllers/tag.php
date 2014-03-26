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
		$string = file_get_contents("http://localhost:8888/cta.int/staging/en/?option=com_tags&view=tags&format=json&limit=1000");
		$items = json_decode($string, true);

		foreach($items as $item) {
			$row = $this->getService('com://admin/terms.model.tags')->id($item->id)->getItem();
			$row->setData($item);
			$row->save();
		}
	}
}