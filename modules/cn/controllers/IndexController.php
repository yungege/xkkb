<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;
use app\modules\cn\controllers\BaseController;

use app\models\Banner;
use app\models\Category;

class IndexController extends BaseController
{
    protected $categoryModel;

    public function init(){
        parent::init();
        $this->categoryModel = new Category;
    }
    
    public function actionIndex(){

        $bannerList = (new Banner)->getBannerList();
        $this->view->params['activeMeau'] = 0;
        
        return $this->render('index', [
            'banner' => $bannerList,
        ]);
    }

    
    
    public function actionAboult(){
        $get = Yii::$app->request->get();
        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(4);
        $c1 = (!is_numeric($get['ca_f']) || (int)$get['ca_f'] <= 0) ? $firstLevelMeau[0]['id'] : $get['ca_f'];

        $this->view->params['activeMeau'] = 1;
        return $this->render('aboult', [
            'category_list' => $firstLevelMeau,
            'active_category' => $c1,
        ]);
    }
}
