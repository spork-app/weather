<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite425c18760e38691642e39cccd4caa05
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spork\\Weather\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spork\\Weather\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite425c18760e38691642e39cccd4caa05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite425c18760e38691642e39cccd4caa05::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite425c18760e38691642e39cccd4caa05::$classMap;

        }, null, ClassLoader::class);
    }
}