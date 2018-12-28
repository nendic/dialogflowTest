<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8dcc33f1c86ad2692976376373434697
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\' => 18,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'D' => 
        array (
            'Dialogflow\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/contracts',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Dialogflow\\' => 
        array (
            0 => __DIR__ . '/..' . '/eristemena/dialogflow-fulfillment-webhook-php/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nesbot/carbon/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8dcc33f1c86ad2692976376373434697::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8dcc33f1c86ad2692976376373434697::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit8dcc33f1c86ad2692976376373434697::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
