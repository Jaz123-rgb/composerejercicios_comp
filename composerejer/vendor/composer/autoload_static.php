<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1916c657ef8644e318c6a1f88f50909
{
    public static $files = array (
        '0394638cdee50b195e0265a539bfdfb2' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Text\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1916c657ef8644e318c6a1f88f50909::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1916c657ef8644e318c6a1f88f50909::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb1916c657ef8644e318c6a1f88f50909::$classMap;

        }, null, ClassLoader::class);
    }
}
