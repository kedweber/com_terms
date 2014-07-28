<?php

class ComTermsModelTags extends ComDefaultModelDefault
{
	/**
	 * @param KConfig $config
	 */
	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->_state
			->insert('slug'		, 'string', null, true)
			->insert('limit'	, 'int', 10)
			->insert('offset'	, 'int', 0)
		;
	}
}