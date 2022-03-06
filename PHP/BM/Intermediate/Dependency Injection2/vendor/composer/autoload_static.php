<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11c911616d93088653d996fd2f2b4c1d
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
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit11c911616d93088653d996fd2f2b4c1d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11c911616d93088653d996fd2f2b4c1d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit11c911616d93088653d996fd2f2b4c1d::$classMap;

        }, null, ClassLoader::class);
    }
}
