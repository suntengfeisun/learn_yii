<?php

//require __ROOT__.'/framework/CController.php';
require __ROOT__.'/models/Article.php';

class SiteController extends CController
{
    public function actionIndex()
    {
        echo 'hello world';
    }
}

