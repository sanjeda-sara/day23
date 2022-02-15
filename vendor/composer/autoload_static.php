<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb191f0b1d4ef9fc58f05472d6965d316
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb191f0b1d4ef9fc58f05472d6965d316::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb191f0b1d4ef9fc58f05472d6965d316::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb191f0b1d4ef9fc58f05472d6965d316::$classMap;

        }, null, ClassLoader::class);
    }
}