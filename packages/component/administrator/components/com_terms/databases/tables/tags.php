<?php

class ComTermsDatabaseTableTags extends KDatabaseTableDefault
{
    /**
     * @param KConfig $config
     */
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
            'behaviors' => array(
				'com://admin/moyo.database.behavior.sluggable',
				'identifiable',
				'orderable',
				'com://admin/moyo.database.behavior.creatable',
				'modifiable',
                'lockable',
                'com://admin/taxonomy.database.behavior.relationable',
                'com://admin/translations.database.behavior.translatable',
            )
        ));

        parent::_initialize($config);
    }
}