<?php

class Core
{
    private $controller;
    private $method;
    private $params = array();

    public function __construct()
    {
        $this->checkUri();
    }

    public function run()
    {
        $currentController = $this->getController();
        $c = new $currentController();
        call_user_func_array(array($c, $this->getMethod()), $this->getParams());
    }

    private function checkUri()
    {
        if (MAINTENANCE) {
           return $this->controller = MAINTENANCE_CONTROLLER;
        }

        $url = explode("index.php", $_SERVER["PHP_SELF"]);
        $url = end($url);
        if (!empty($url)) {
            $url = explode('/', $url);
            array_shift($url);

            $nameSpace = '';
            foreach ($url as $segment) {
                $nameSpace .= $nameSpace ? '\\' . ucfirst($segment) : ucfirst($segment);
                $controller = $this->checkIfControllerExists($nameSpace);
                array_shift($url);
                if($controller) {
                    $this->controller = $controller;
                    break;
                }
            }

            if(!$this->controller) {
                return $this->controller = $this->getPageNotFoundController();
            }

            if (isset($url[0])) {
                $method = $url[0];
                if (method_exists($this->controller, $method)) {
                    $this->method = $method;
                    array_shift($url);
                }
            }

            if (isset($url[0])) {
                $this->params = array_filter($url);
            }
        } else {
            $this->controller = $this->getDefaultController();
        }
    }

    private function getController()
    {
        if (class_exists($this->controller)) {
            return $this->controller;
        }
        return $this->getDefaultController();
    }

    private function getMethod()
    {
        if (method_exists(Core::getController(), $this->method)) {
            return $this->method;
        }

        return DEFAULT_METHOD;
    }

    private function getParams()
    {
        return $this->params;
    }

    private function checkIfControllerExists($nameSpace)
    {
        $controller = NAMESPACE_CONTROLLER . $nameSpace . "Controller";
        return class_exists($controller) ? $controller : null;
    }

    private function getDefaultController()
    {
        return NAMESPACE_CONTROLLER . ucfirst(DEFAULT_CONTROLLER) . "Controller";
    }

    public function getPageNotFoundController()
    {
        return NAMESPACE_CONTROLLER . ucfirst(PAGE_NOT_FOUND_CONTROLLER) . "Controller";
    }
}
