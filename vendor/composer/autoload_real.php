<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit521cef5d90ebf9e252050178440f5c57
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

        spl_autoload_register(array('ComposerAutoloaderInit521cef5d90ebf9e252050178440f5c57', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit521cef5d90ebf9e252050178440f5c57', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit521cef5d90ebf9e252050178440f5c57::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
