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

use Eliasis\Module\Module;

$css = Module::WP_Plugin_Rating('url')['css'];

return [

    'assets' => [

        'css' => [
            'WP_Plugin_Rating' => [
                'name'      => 'WP_Plugin_Rating',
                'url'       => $css . 'wp-plugin-rating.css',
                'place'     => 'admin',
                'deps'      => [],
                'version'   => '1.0.0',
                'media'     => '',
            ],
        ],
    ],
];
