<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28a6e2d0e757a8e1e63b54eeddb5d336
{
    public static $files = array (
        'f084d01b0a599f67676cffef638aa95b' => __DIR__ . '/..' . '/smarty/smarty/libs/bootstrap.php',
    );

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

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPQRCode' => 
            array (
                0 => __DIR__ . '/..' . '/aferrandini/phpqrcode/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit28a6e2d0e757a8e1e63b54eeddb5d336::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28a6e2d0e757a8e1e63b54eeddb5d336::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit28a6e2d0e757a8e1e63b54eeddb5d336::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
