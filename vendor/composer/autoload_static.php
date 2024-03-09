<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9cdf7ceda3cc196217486d632c941ec7
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zakki\\Tglindo\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zakki\\Tglindo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9cdf7ceda3cc196217486d632c941ec7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9cdf7ceda3cc196217486d632c941ec7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9cdf7ceda3cc196217486d632c941ec7::$classMap;

        }, null, ClassLoader::class);
    }
}
