<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit521cef5d90ebf9e252050178440f5c57
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UI\\' => 3,
        ),
        'L' => 
        array (
            'Leon\\CliShop\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/UI',
        ),
        'Leon\\CliShop\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit521cef5d90ebf9e252050178440f5c57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit521cef5d90ebf9e252050178440f5c57::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit521cef5d90ebf9e252050178440f5c57::$classMap;

        }, null, ClassLoader::class);
    }
}