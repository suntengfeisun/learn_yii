<?php

define("__ROOT__",dirname(__FILE__));

$defaultController = 'site';
$defaultAction = 'index';

if (!empty($_GET['r'])) {
    $route = $_GET['r'];
    //查找／在$route第一次出现的位置
    $pos = strpos($route, '/');
    //从0到$pos是controtller的名称
    $defaultController = substr($route, 0, $pos);
    //全部转为小写
    $defaultController = strtolower($defaultController);
    //
    $defaultAction = (string)substr($route, $pos + 1);
}
//首字母大写
$className = ucfirst($defaultController) . 'Controller';

$classFile = __ROOT__.'/controllers/' . $className . '.php';

if (is_file($classFile)) {
    if (!class_exists($className, false)) {
        require $classFile;
        $class = new $className();
        $functionName = 'action' . ucfirst($defaultAction);
        $class->$functionName();
    }
}
