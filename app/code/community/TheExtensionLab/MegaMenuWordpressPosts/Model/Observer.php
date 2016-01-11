<?php class TheExtensionLab_MegaMenuWordpressPosts_Model_Observer
{
    public function megamenuPreparePrefetchModelsAfter(Varien_Event_Observer $observer)
    {
        $parser = $observer->getParser();
        $prefetcher = $observer->getPrefetcher();

        $parser->setChildParser('wordpress_posts','theextensionlab_megamenuwordpressposts/parser_wordpress_post');
        $prefetcher->setChildPrefetcher('wordpress_posts','theextensionlab_megamenuwordpressposts/prefetcher_wordpress_post');
    }
}