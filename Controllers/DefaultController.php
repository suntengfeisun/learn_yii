<?php

require '../framework/CController.php';
require '../models/Article.php';
//require '../views/index.php';

class DefaultController extends CController
{
    public function actionIndex()
    {
        $article = new Article();
        $result = $article->find();
        $this->render('../views/index.php', ['result' => $result]);
    }
}

$default_con = new DefaultController();
$default_con->actionIndex();

