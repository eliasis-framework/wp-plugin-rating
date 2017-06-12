<?php
/**
 * WP Plugin Rating · Eliasis module for WordPress plugins
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    GPL-2.0+
 * @link       https://github.com/Josantonius/WP_Plugin-Rating.git
 * @since      1.0.0
 */

namespace Eliasis\Modules\WP_Plugin_Rating\Controller\Launcher;

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

        if (Module::WP_Plugin_Rating()->get('state') === 'active') {

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

                $this->setLanguages();
                
                $Rating = Module::WP_Plugin_Rating()->instance('Rating');

                Hook::addAction(
                    'get-wp-plugin-rating', 
                    [$Rating, 'getPluginRating'], 
                    8, 
                    1
                );
            });

            add_action($hook, [$this, 'addStyles']);
        }
    }


    /**
     * Set plugin textdomain.
     * 
     * @since 1.0.0
     */
    public function setLanguages() {

        $slug = 'eliasis-' . Module::WP_Plugin_Rating()->get('slug');

        $path = Module::WP_Plugin_Rating()->get('path', 'languages');

        load_plugin_textdomain($slug, false, $path);
    }


    /**
     * Load styles.
     *
     * @since 1.0.0
     */
    public function addStyles() {

        $css = Module::WP_Plugin_Rating()->get('assets', 'css');

        WP_Register::add('style', $css['WP_Plugin_Rating']);
    }
}
