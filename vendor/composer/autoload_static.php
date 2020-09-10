<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68be0100d7d9e80e822c421ddd2b7c98
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'WPFreighter\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPFreighter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'WPFreighter\\Configurations' => __DIR__ . '/../..' . '/app/Configurations.php',
        'WPFreighter\\Run' => __DIR__ . '/../..' . '/app/Run.php',
        'WPFreighter\\Sites' => __DIR__ . '/../..' . '/app/Sites.php',
        'WPFreighter\\Updater' => __DIR__ . '/../..' . '/app/Updater.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68be0100d7d9e80e822c421ddd2b7c98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68be0100d7d9e80e822c421ddd2b7c98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit68be0100d7d9e80e822c421ddd2b7c98::$classMap;

        }, null, ClassLoader::class);
    }
}
