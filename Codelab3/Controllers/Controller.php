<?php

namespace Controller;

class Controller{
    var $controllerName;
    var $controllerMethod;

    public function getControllerAttrribute()
    {
        return[
            "ControllerName" => $this->controllerName,
            "Method" => $this->controllerMethod

        ];
    }
}