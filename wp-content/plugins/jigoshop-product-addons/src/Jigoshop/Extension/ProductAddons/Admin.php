<?php

namespace Jigoshop\Extension\ProductAddons;

class Admin
{
    /**
     * Admin constructor.
     */
    public function __construct()
    {
        add_action('init', array($this, 'init'));
        add_filter('plugin_action_links_' . plugin_basename(JIGOSHOP_PRODUCT_ADDONS_DIR . '/bootstrap.php'), array($this, 'actionLinks'));
    }

    /**
     * Init Admin Components
     */
    public function init()
    {
        new Admin\Product();
    }

    /**
     * Show action links on plugins page.
     *
     * @param $links
     *
     * @return array
     */
    public function actionLinks($links)
    {
        $links[] = '<a href="https://www.jigoshop.com/documentation/jigoshop-product-add-ons/" target="_blank">Documentation</a>';
        $links[] = '<a href="https://www.jigoshop.com/support/" target="_blank">Support</a>';
        $links[] = '<a href="https://wordpress.org/support/view/plugin-reviews/jigoshop#$postform" target="_blank">Rate Us</a>';
        $links[] = '<a href="https://www.jigoshop.com/product-category/extensions/" target="_blank">More plugins for Jigoshop</a>';

        return $links;
    }
}
new Admin();