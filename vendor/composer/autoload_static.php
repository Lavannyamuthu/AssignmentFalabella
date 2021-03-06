<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit468b743b85c0e3e427ae6513f8f98663
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AssignmentFalabella\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AssignmentFalabella\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'phpclass\\AssignmentFalabella\\src\\Main' => __DIR__ . '/../..' . '/src/main.php',
        'phpclass\\AssignmentFalabella\\src\\NumberCalculation' => __DIR__ . '/../..' . '/src/NumberCalculation.php',
        'phpclass\\AssignmentFalabella\\src\\PrintResult' => __DIR__ . '/../..' . '/src/PrintResult.php',
        'phpclass\\AssignmentFalabella\\src\\ResultSet' => __DIR__ . '/../..' . '/src/ResultSet.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit468b743b85c0e3e427ae6513f8f98663::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit468b743b85c0e3e427ae6513f8f98663::$prefixDirsPsr4;
            $loader->fallbackDirsPsr0 = ComposerStaticInit468b743b85c0e3e427ae6513f8f98663::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInit468b743b85c0e3e427ae6513f8f98663::$classMap;

        }, null, ClassLoader::class);
    }
}
