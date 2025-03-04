<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a9a4d5757f076457cb73929f313ae6b
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '170a97189882fcb6031a5a175adc44f9' => __DIR__ . '/../..' . '/src/Controller.php',
        '1dc13e434480795195236590267dad77' => __DIR__ . '/../..' . '/src/View.php',
        '53c11a9996c36f9819a176bb137b86bf' => __DIR__ . '/../..' . '/src/Database.php',
    );

    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mar1o2003\\CALCULATOR\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mar1o2003\\CALCULATOR\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a9a4d5757f076457cb73929f313ae6b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a9a4d5757f076457cb73929f313ae6b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5a9a4d5757f076457cb73929f313ae6b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5a9a4d5757f076457cb73929f313ae6b::$classMap;

        }, null, ClassLoader::class);
    }
}
