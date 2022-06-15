<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f697b90181a3f2348218a121f4b0659
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Charef\\FreeTranslateApi\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Charef\\FreeTranslateApi\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f697b90181a3f2348218a121f4b0659::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f697b90181a3f2348218a121f4b0659::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f697b90181a3f2348218a121f4b0659::$classMap;

        }, null, ClassLoader::class);
    }
}
