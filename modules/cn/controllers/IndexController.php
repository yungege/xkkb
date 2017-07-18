<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;
use app\modules\cn\controllers\BaseController;

class IndexController extends BaseController
{
    
    public function actionIndex(){
        
        return $this->render('index', []);
    }
}
