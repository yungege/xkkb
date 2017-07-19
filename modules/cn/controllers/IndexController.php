<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;
use app\modules\cn\controllers\BaseController;

use app\models\Banner;

class IndexController extends BaseController
{
    
    public function actionIndex(){

        $bannerList = (new Banner)->getBannerList();
        
        return $this->render('index', [
            'banner' => $bannerList,
        ]);
    }

    public function actionAboult(){

        return $this->render('aboult');
    }
}
