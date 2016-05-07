<?php

class Autoloader
{

    public static function registerAutoload()
    {
        spl_autoload_register(array(__CLASS__, 'autoloadCoreClass'));
    }

    public static function autoloadCoreClass($className)
    {
        $filename = explode('\\', $className);
        $filename = end($filename);
        $filename = __DIR__ . DIRECTORY_SEPARATOR . $filename . '.php';
        if( is_readable($filename) )
            require "$filename";
    }
}