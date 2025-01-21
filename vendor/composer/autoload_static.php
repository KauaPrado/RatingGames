<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5d0f357c8522f46f40a7b2c9af5d401
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gameratings\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gameratings\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5d0f357c8522f46f40a7b2c9af5d401::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5d0f357c8522f46f40a7b2c9af5d401::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita5d0f357c8522f46f40a7b2c9af5d401::$classMap;

        }, null, ClassLoader::class);
    }
}