<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ba38ca24745b214acde9bdb11f16e08
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'H' => 
        array (
            'Hp\\PhpForm\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Hp\\PhpForm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ba38ca24745b214acde9bdb11f16e08::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ba38ca24745b214acde9bdb11f16e08::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0ba38ca24745b214acde9bdb11f16e08::$classMap;

        }, null, ClassLoader::class);
    }
}
