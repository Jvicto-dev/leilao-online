<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb9955e49a02ba394aef8b640be84584
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb9955e49a02ba394aef8b640be84584::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb9955e49a02ba394aef8b640be84584::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb9955e49a02ba394aef8b640be84584::$classMap;

        }, null, ClassLoader::class);
    }
}
