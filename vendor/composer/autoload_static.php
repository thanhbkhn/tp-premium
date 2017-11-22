<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit812392c37272dde3dea04849f95118a4
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TP\\Premium\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TP\\Premium\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit812392c37272dde3dea04849f95118a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit812392c37272dde3dea04849f95118a4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}