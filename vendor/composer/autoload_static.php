<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51dee5d62d5940d8a1aa27e3dd0c68d1
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit51dee5d62d5940d8a1aa27e3dd0c68d1::$classMap;

        }, null, ClassLoader::class);
    }
}