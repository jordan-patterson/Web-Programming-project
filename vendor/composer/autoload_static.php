<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30b2a5224c26099f206120e276ad5ece
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit30b2a5224c26099f206120e276ad5ece::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30b2a5224c26099f206120e276ad5ece::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
