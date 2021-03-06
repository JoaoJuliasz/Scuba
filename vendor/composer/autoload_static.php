<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c52e2ba8482633864cd27c20fda9040
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Scubatuba\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Scubatuba\\' => 
        array (
            0 => __DIR__ . '/..' . '/scubatuba',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c52e2ba8482633864cd27c20fda9040::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c52e2ba8482633864cd27c20fda9040::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0c52e2ba8482633864cd27c20fda9040::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
