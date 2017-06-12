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

use Eliasis\App\App,
    Eliasis\Module\Module;

$DS = App::DS;

$ROOT = Module::WP_Plugin_Rating()->get('path', 'root');

return [

    'path' => [

        'languages' => $ROOT.'languages'.$DS,
        'component' => $ROOT.'src'.$DS.'template'.$DS.'component'.$DS,
    ],
];
