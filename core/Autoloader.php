<?php

namespace Doc\Core;


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
        require $filename . '.php';
    }
}