<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d850348f5c935247053329455676ba3
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mollie\\Api\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mollie\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/mollie/mollie-api-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d850348f5c935247053329455676ba3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d850348f5c935247053329455676ba3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d850348f5c935247053329455676ba3::$classMap;

        }, null, ClassLoader::class);
    }
}