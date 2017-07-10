<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;

class IndexController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->getView()->title = "k";
        
        return $this->render('index');
    }

}
