<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit094869c62af65e4df4645e3a869f34ec
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit094869c62af65e4df4645e3a869f34ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit094869c62af65e4df4645e3a869f34ec::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}