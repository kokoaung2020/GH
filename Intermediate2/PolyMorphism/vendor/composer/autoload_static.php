<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39dfc0f08e1ddeb20d26bc8f515a541f
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\Circle' => __DIR__ . '/../..' . '/app/Circle.php',
        'app\\Square' => __DIR__ . '/../..' . '/app/Square.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39dfc0f08e1ddeb20d26bc8f515a541f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39dfc0f08e1ddeb20d26bc8f515a541f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit39dfc0f08e1ddeb20d26bc8f515a541f::$classMap;

        }, null, ClassLoader::class);
    }
}