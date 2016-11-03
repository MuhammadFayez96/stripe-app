<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06fc4b0c3b80f20d57ff460050339806
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06fc4b0c3b80f20d57ff460050339806::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06fc4b0c3b80f20d57ff460050339806::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
