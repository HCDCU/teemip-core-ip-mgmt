<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5bfa4bcf619d3ccd370baaa384792d28
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TeemIp\\TeemIp\\Extension\\Webservices\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TeemIp\\TeemIp\\Extension\\Webservices\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TeemIp\\TeemIp\\Extension\\Webservices\\Controller\\RestResultCountIps' => __DIR__ . '/../..' . '/src/Controller/RestResultCountIps.php',
        'TeemIp\\TeemIp\\Extension\\Webservices\\Controller\\RestResultWithTextFile' => __DIR__ . '/../..' . '/src/Controller/RestResultWithTextFile.php',
        'TeemIp\\TeemIp\\Extension\\Webservices\\Hook\\TeemIpServices' => __DIR__ . '/../..' . '/src/Hook/TeemIpServices.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5bfa4bcf619d3ccd370baaa384792d28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5bfa4bcf619d3ccd370baaa384792d28::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5bfa4bcf619d3ccd370baaa384792d28::$classMap;

        }, null, ClassLoader::class);
    }
}
