<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f08422fd9359be7882784a3c9afd876
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Josantonius\\WP_Register\\' => 24,
            'Josantonius\\Url\\' => 16,
            'Josantonius\\Hook\\' => 17,
        ),
        'E' => 
        array (
            'Eliasis\\' => 8,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'App\\Modules\\WP_Plugin_Rating\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Josantonius\\WP_Register\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/wp_register/src',
        ),
        'Josantonius\\Url\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/url/src',
        ),
        'Josantonius\\Hook\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/hook/src',
        ),
        'Eliasis\\' => 
        array (
            0 => __DIR__ . '/..' . '/eliasis-framework/eliasis/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'App\\Modules\\WP_Plugin_Rating\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f08422fd9359be7882784a3c9afd876::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f08422fd9359be7882784a3c9afd876::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
