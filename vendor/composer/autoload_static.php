<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc39a398aba3067cca753170179eb3be3
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mascara\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mascara\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/formatter/mascara/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc39a398aba3067cca753170179eb3be3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc39a398aba3067cca753170179eb3be3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
