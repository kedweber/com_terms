<?php

class ComTermsModelTags extends ComTaxonomyModelDefault
{
    /**
     * @param KConfig $config
     */
    public function __construct(KConfig $config)
    {
        parent::__construct($config);

        $this->_state
            ->insert('taxonomy_taxonomy_id' , 'int', null, true)
            ->insert('enabled'              , 'int')
        ;
    }

    /**
     * @param KDatabaseQuery $query
     */
    protected function _buildQueryWhere(KDatabaseQuery $query)
    {
        $state = $this->_state;

        parent::_buildQueryWhere($query);

        if(is_numeric($state->taxonomy_taxonomy_id)) {
            $query->where('taxonomy_taxonomy_id', '=', $state->taxonomy_taxonomy_id);
        }

        if(is_numeric($state->enabled)) {
            $query->where('tbl.enabled', '=', $state->enabled);
        }

		if($state->search) {
			$query->where('tbl.title', 'LIKE', '%'.$state->search.'%');
		}
    }
}