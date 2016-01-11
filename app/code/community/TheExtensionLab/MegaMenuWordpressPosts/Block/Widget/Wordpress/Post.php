<?php

/**
 * @category    TheExtensionLab
 * @package     TheExtensionLab_MegaMenu
 * @copyright   Copyright (c) 2015 TheExtensionLab (http://www.theextensionlab.com)
 * @license     http://www.theextensionlab.com/license/license.txt - Commercial License
 * @author      James Anelay @ TheExtensionLab <james@theextensionlab.com>
 */

class TheExtensionLab_MegaMenuWordpressPosts_Block_Widget_Wordpress_Post extends TheExtensionLab_MegaMenu_Block_Widget_Template
    implements Mage_Widget_Block_Interface
{
    public function getPost()
    {
        $postId = $this->getWordpressPostId();

        if (!$postId) {
            return false;
        }

        $collection = Mage::registry('megamenu_wordpress_posts');
        $post = $collection->getItemById($postId);
        return $post;
    }
}