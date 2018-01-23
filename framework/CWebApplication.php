<?php

class CWebApplication
{
    public $name;

    public $defaultController = 'site';

    public $defaultAction = 'index';
    private static $_app;

    private function __construct($config = null)
    {
        //配置文件
        if (is_array($config)) {
            foreach ($config as $key=>$value) {
                $this->$key = $value;
            }
        }

    }

    public static function creatApplication($config = null)
    {
        if (self::$_app === null) {
            self::$_app = new CWebApplication($config);
        }
        return self::$_app;
    }

    public static function app()
    {
        return self::$_app;
    }

    public function run()
    {
//        var_dump($this);
        if (!empty($_GET['r'])) {
            $route = $_GET['r'];
            $pos = strpos($route, '/');
            $this->defaultController = substr($route, 0, $pos);
            $this->defaultAction = strtolower($this->defaultController);
            $this->defaultAction = (string)substr($route, $pos + 1);
        }
        $className = ucfirst($this->defaultController) . 'Controller';
        $classFile = __ROOT__ . '/controllers/' . $className . '.php';
        if (is_file($classFile)) {
            require $classFile;
            $class = new $className();
            $funcitonName = 'action' . ucfirst($this->defaultAction);
            $class->$funcitonName();
        }
    }
}