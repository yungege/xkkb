<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        $this->getView()->title = "kkkk";
        
        return $this->render('index');
    }

}
