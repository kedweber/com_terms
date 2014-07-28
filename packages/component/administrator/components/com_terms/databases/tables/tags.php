<?php

class ComTermsDatabaseTableTags extends KDatabaseTableDefault
{
    /**
     * @param KConfig $config
     */
    protected function _initialize(KConfig $config)
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
				'com://admin/moyo.database.behavior.sluggable',
				'identifiable',
				'orderable',
				'com://admin/moyo.database.behavior.creatable',
				'modifiable',
                'lockable',
				$relationable,
                'com://admin/translations.database.behavior.translatable',
            )
        ));

        parent::_initialize($config);
    }
}