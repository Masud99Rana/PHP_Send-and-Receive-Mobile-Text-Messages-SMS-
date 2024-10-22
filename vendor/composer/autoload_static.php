<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf1ff756653467437433ea2b1901b3a3
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf1ff756653467437433ea2b1901b3a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf1ff756653467437433ea2b1901b3a3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
