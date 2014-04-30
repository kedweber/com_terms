<?php

class ComTermsDispatcher extends ComDefaultDispatcher
{
    /**
     * @param KConfig $config
     */
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
        	'controller' => 'tags',
        ));
        
        parent::_initialize($config);
    }
}