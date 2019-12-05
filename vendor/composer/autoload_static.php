<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit523f1df18b710c6b80d905d8c4aa5c14
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'a' => 
        array (
            'angelleye\\PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/angelleye/paypal-php-library/src',
            ),
        ),
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit523f1df18b710c6b80d905d8c4aa5c14::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit523f1df18b710c6b80d905d8c4aa5c14::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit523f1df18b710c6b80d905d8c4aa5c14::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
