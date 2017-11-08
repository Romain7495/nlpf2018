<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56433a008d50348559d59c0a112886d6
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hackathon\\Tests\\' => 16,
            'Hackathon\\PlayerIA\\' => 19,
            'Hackathon\\Game\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hackathon\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Tests',
        ),
        'Hackathon\\PlayerIA\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Game/PlayerIA',
        ),
        'Hackathon\\Game\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Game/Engine',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56433a008d50348559d59c0a112886d6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56433a008d50348559d59c0a112886d6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
