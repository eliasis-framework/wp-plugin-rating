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

use Eliasis\App\App,
    Eliasis\Module\Module;

$DS = App::DS;

$folder = Module::WP_Plugin_Rating('folder');

$ROOT = App::ROOT() . 'modules' . App::DS . $folder;

return [

    'path' => [

        'components' => $ROOT.'src'.$DS.'template'.$DS.'components'.$DS,
    ],
];
