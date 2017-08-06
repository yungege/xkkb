<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;
use app\modules\cn\controllers\BaseController;

use app\models\Banner;
use app\models\Category;
use app\models\Qualification;
use app\models\News;
use app\models\Support;
use app\models\Cases;

class IndexController extends BaseController
{
    protected $categoryModel;
    protected $qualification;
    protected $bannerModel;
    protected $newsModel;
    protected $supportModel;
    protected $caseModel;

    public function init(){
        parent::init();
        $this->categoryModel = new Category;
        $this->qualification = new Qualification;
        $this->bannerModel = new Banner;
        $this->newsModel = new News;
        $this->supportModel = new Support;
        $this->caseModel = new Cases;
    }
    
    public function actionIndex(){
        $this->view->params['activeMeau'] = 0;

        $bannerList = $this->bannerModel->getBannerList();
        $newsList = $this->newsModel->getTop3News();
        $supList = $this->supportModel->getTop3News();
        $caseList = $this->caseModel->getTop3News();
        
        return $this->render('index', [
            'banner' => $bannerList,
            'newsList' => $newsList,
            'supList' => $supList,
            'caseList' => $caseList,
        ]);
    }

    
    
    public function actionAboult(){
        $get = Yii::$app->request->get();
        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(4);
        $c1 = (!is_numeric($get['ca_f']) || (int)$get['ca_f'] <= 0) ? $firstLevelMeau[0]['id'] : $get['ca_f'];

        $list = $this->qualification->getList();

        $this->view->params['activeMeau'] = 1;
        return $this->render('aboult', [
            'category_list' => $firstLevelMeau,
            'active_category' => $c1,
            'list' => $list,
        ]);
    }
}
