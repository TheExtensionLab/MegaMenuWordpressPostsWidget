<?php class TheExtensionLab_MegaMenuWordpressPosts_Model_Parser_Wordpress_Post implements TheExtensionLab_MegaMenu_Model_Parser_Interface
{
    public function parse($params)
    {
        $prefetchConfig = array();
        if ($this->_hasValidBlockId($params)){
            $prefetchConfig['wordpress_post_ids'][] = $params['wordpress_post_id'];
        }
        return $prefetchConfig;
    }

    private function _hasValidBlockId($params)
    {
        if (!isset($params['wordpress_post_id'])) {
            return false;
        }

        return is_numeric($params['wordpress_post_id']);
    }
}