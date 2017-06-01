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

$namespace = 'App\\Modules\\';

$module = 'WP_Plugin_Rating\\Controller\\';

return [

    'namespaces' => [

        'controller' => $namespace . $module,
        'components' => $namespace . $module . 'Admin\\Components\\',
    ],
];
