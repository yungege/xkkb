<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;
use app\modules\cn\controllers\BaseController;

// use app\models\Product;

class ProductController extends BaseController
{
    
    public function actionIndex(){

        // $bannerList = (new Banner)->getBannerList();
        
        return $this->render('index', [
            
        ]);
    }

}
