<?php

/**
 * @category    TheExtensionLab
 * @package     TheExtensionLab_MegaMenu
 * @copyright   Copyright (c) 2015 TheExtensionLab (http://www.theextensionlab.com)
 * @license     http://www.theextensionlab.com/license/license.txt - Commercial License
 * @author      James Anelay @ TheExtensionLab <james@theextensionlab.com>
 */

class TheExtensionLab_MegaMenuWordpressPosts_Model_Prefetcher_Wordpress_Post implements TheExtensionLab_MegaMenu_Model_Prefetcher_Interface
{
    public function prefetchData(&$directiveValues){
        if(isset($directiveValues['wordpress_post_ids']))
        {
            $postCollection = Mage::getResourceModel('wordpress/post_collection')
                ->addIsViewableFilter()
                ->addFieldToFilter('ID', array('in' => $directiveValues['wordpress_post_ids']))
                ->load()
            ;

            Mage::register('megamenu_wordpress_posts', $postCollection);
        }
    }
}