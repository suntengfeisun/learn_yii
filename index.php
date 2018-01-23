<?php

define("__ROOT__", dirname(__FILE__));

require __ROOT__ . '/framework/CController.php';
require __ROOT__ . '/framework/CWebApplication.php';
$config = require __ROOT__ . "/config/main.php";
$app = CWebApplication::creatApplication($config);
$app->run();
