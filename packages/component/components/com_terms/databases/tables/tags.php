<?php

defined('KOOWA') or die('Protected resource');

class ComTermsDatabaseTableTags extends KDatabaseTableDefault
{
	protected function  _initialize(KConfig $config)
	{
		$relationable = $this->getBehavior('com://site/taxonomy.database.behavior.relationable',
			array(
				'descendants' => array(
					'articles' => array(
						'identifier' => 'com://site/articles.model.articles',
					)
				)
			)
		);

		$config->append(array(
			'behaviors' => array(
				$relationable,
			)
		));

		parent::_initialize($config);
	}
}