<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit517704b11703177718c4c8eb9e020d68
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '37920fbd6eaeababa873d97ba1c5324c' => __DIR__ . '/..' . '/hellonico/timber-dump-extension/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
            'Timber\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'H' => 
        array (
            'HelloNico\\Twig\\' => 15,
            'HelloNico\\Timber\\' => 17,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Timber\\' => 
        array (
            0 => __DIR__ . '/..' . '/timber/timber/lib',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'HelloNico\\Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/hellonico/twig-dump-extension/src',
        ),
        'HelloNico\\Timber\\' => 
        array (
            0 => __DIR__ . '/..' . '/hellonico/timber-dump-extension/src',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/asm89/twig-cache-extension/lib',
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'R' => 
        array (
            'Routes' => 
            array (
                0 => __DIR__ . '/..' . '/upstatement/routes',
            ),
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit517704b11703177718c4c8eb9e020d68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit517704b11703177718c4c8eb9e020d68::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit517704b11703177718c4c8eb9e020d68::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit517704b11703177718c4c8eb9e020d68::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit517704b11703177718c4c8eb9e020d68::$classMap;

        }, null, ClassLoader::class);
    }
}
