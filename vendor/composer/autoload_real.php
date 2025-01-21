<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita5d0f357c8522f46f40a7b2c9af5d401
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInita5d0f357c8522f46f40a7b2c9af5d401', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita5d0f357c8522f46f40a7b2c9af5d401', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita5d0f357c8522f46f40a7b2c9af5d401::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}