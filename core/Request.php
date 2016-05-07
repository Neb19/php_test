<?php

namespace Doc\Core;


class Request
{
    private $params;
    private $controller;
    private $action;

    public function __construct()
    {
        if( isset($_GET['controller']) ) {
            $this->setController($_GET['controller']);

            if(isset($_GET['action'])) {
                $this->setAction($_GET['action']);

                if(isset($_GET['params'])) {
                    $this->setParams($_GET['params']);
                }

            } else {
                $this->setAction('default');
            }

        } else {
            $this->setController('default');
        }
    }

    // -------- Controller
    public function getController()
    {
        return $this->controller;
    }

    private function setController($controller)
    {
        $this->controller = $controller;
    }

    // -------- Action
    public function getAction()
    {
        return $this->action;
    }

    private function setAction($action)
    {
        $this->action = $action;
    }

    // -------- Data
    public function getParams()
    {
        return $this->params;
    }

    private function setParams($params)
    {
        $this->params = serialize($params);
        var_dump($this->params);
    }

}