<?php
/**
 * Eliasis module for WordPress plugins · WP Plugin Rating
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    GPL-2.0+
 * @link       https://github.com/Josantonius/WP_Plugin-Rating.git
 * @since      1.0.0
 */

namespace App\Modules\WP_Plugin_Rating\Controller\Launcher;

use Josantonius\WP_Register\WP_Register,
    Josantonius\Hook\Hook,
    Eliasis\App\App,
    Eliasis\Module\Module,
    Eliasis\Controller\Controller;
    
/**
 * Module main controller.
 *
 * @since 1.0.0
 */
class Launcher extends Controller {

    /**
     * Class initializer method.
     * 
     * @since 1.0.0
     *
     * @return
     */
    public function init() {

        if (Module::WP_Plugin_Rating('state') === 'active') {

            if (is_admin()) {

                $this->admin();
            } 
        }
    }
                                                                             
    /**
     * Admin initializer method.
     * 
     * @since 1.0.0
     * 
     * @uses add_action() → hooks a function on to a specific action
     */
    public function admin() {

        global $pagenow;

        if ($pagenow === 'admin.php') {

            $method = [$this, 'afterAddMenu'];

            add_action('wp_menu/after_add_menu_page',    $method, 10, 1);
            add_action('wp_menu/after_add_submenu_page', $method, 10, 1);
        }
    }

    /**
     * After add menu, add page load hook.
     *
     * @param string $hook → resulting page's hook_suffix after add menu.
     *
     * @since 1.0.0
     */
    public function afterAddMenu($hook) {

        if ($hook) {

            add_action($hook, function() {

                Hook::addAction(
                    'wp-plugin-rating', 
                    [$this->getRatingClass(), 'getPluginRating'], 
                    8, 
                    1
                );
            });

            add_action($hook, [$this, 'addStyles']);
        }
    }

    /**
     * Get Rating class namespace.
     * 
     * @since 1.0.0
     *
     * @return string → full class name
     */
    public function getRatingClass() {

        $namespace = Module::WP_Plugin_Rating('namespaces')['components'];

        return $namespace . 'Rating\\Rating';
    }

    /**
     * Load styles.
     *
     * @since 1.0.0
     */
    public function addStyles() {

        $css = Module::WP_Plugin_Rating('assets', 'css', 'WP_Plugin_Rating');

        WP_Register::add('style', $css);
    }
}
