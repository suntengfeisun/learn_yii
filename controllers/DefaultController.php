<?php

//require __ROOT__ . '/framework/CController.php';
require __ROOT__ . '/models/Article.php';

//require '../views/index.php';

class DefaultController extends CController
{
    public function actionIndex()
    {
        $article = new Article();
        $result = $article->find();
        $this->render(__ROOT__.'/views/index.php', ['result' => $result]);
    }
}
//
//$default_con = new DefaultController();
//$default_con->actionIndex();

