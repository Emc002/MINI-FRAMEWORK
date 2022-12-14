<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78157d5055280f78c8adab89acc64eef
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Staditek\\App\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Staditek\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Staditek\\App\\Controller\\HomeController' => __DIR__ . '/../..' . '/App/Controller/HomeController.php',
        'Staditek\\App\\Core\\Router' => __DIR__ . '/../..' . '/App/Core/Router.php',
        'Staditek\\App\\Core\\View' => __DIR__ . '/../..' . '/App/Core/View.php',
        'Staditek\\App\\Model\\dataUser' => __DIR__ . '/../..' . '/App/Model/dataUser.php',
        'Staditek\\App\\config\\Database' => __DIR__ . '/../..' . '/App/config/Database.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78157d5055280f78c8adab89acc64eef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78157d5055280f78c8adab89acc64eef::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78157d5055280f78c8adab89acc64eef::$classMap;

        }, null, ClassLoader::class);
    }
}
