<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc686f8c4bd3e3ea74c2d33ddc5ce89c
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wxPay\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wxPay\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/wxPay',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc686f8c4bd3e3ea74c2d33ddc5ce89c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc686f8c4bd3e3ea74c2d33ddc5ce89c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
