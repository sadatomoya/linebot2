<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5397ac67d912cd18a3ebc0d56b0d44ea
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5397ac67d912cd18a3ebc0d56b0d44ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5397ac67d912cd18a3ebc0d56b0d44ea::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
