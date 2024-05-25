<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit628cd10b811b387983a3e06e4b31bbac
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit628cd10b811b387983a3e06e4b31bbac', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit628cd10b811b387983a3e06e4b31bbac', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit628cd10b811b387983a3e06e4b31bbac::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
