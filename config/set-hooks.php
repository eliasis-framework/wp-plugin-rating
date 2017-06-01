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

$namespace = Module::WP_Plugin_Rating('namespaces')['controller'];

$class = $namespace . 'Launcher\Launcher';

return [

    'hooks' => [

        ['launch-modules', [$class, 'init'], 8, 0],
    ]
];
