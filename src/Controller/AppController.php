<?php


namespace Doc\Controller;

use Doc\Core\Request;

class AppController
{
    private static $_controllerCall;
    private static $_actionCall;

    public static function initialize(Request $request)
    {
        self::$_controllerCall = ucfirst(strtolower($request->getController()));
        self::$_actionCall = strtolower($request->getAction());

        self::initCall();
    }

    private static function initCall()
    {
        $controllerClass = __NAMESPACE__ . DIRECTORY_SEPARATOR .self::$_controllerCall . 'Controller';
        $controllerAction = self::$_actionCall . 'Action';

        $controllerCall = new $controllerClass();
        $controllerCall->$controllerAction();
    }

    protected function render()
    {
        $view = VIEW . self::$_controllerCall . DIRECTORY_SEPARATOR . self::$_actionCall . '.php';
        require "$view";
    }

}