<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;
use app\modules\cn\controllers\BaseController;
use yii\data\Pagination;
use app\models\News;
use app\models\Category;

class NewsController extends BaseController
{
    const PAGESIZE = 5;

    protected $categoryModel;
    protected $newsModel;

    public function init(){
        parent::init();
        $this->categoryModel = new Category;
        $this->newsModel = new News;
    }
    
    public function actionIndex(){
        $get = Yii::$app->request->get();
        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(2);

        $pn = (!is_numeric($get['pn']) || (int)$get['pn'] <= 0) ? 1 : $get['pn'];
        $c1 = (!is_numeric($get['ca_f']) || (int)$get['ca_f'] <= 0) ? $firstLevelMeau[0]['id'] : $get['ca_f'];
        $offset = ($pn - 1) * self::PAGESIZE;

        

        $list = [];
        $count = $this->newsModel->getNewsCountByType($c1);
        if($count != 0){
            $list = $this->newsModel->getNewsListByType($c1, $offset, self::PAGESIZE);
        }
        
        $pages = new Pagination([
            'totalCount' => (int)$count,
            'pageSize' => self::PAGESIZE,
        ]);

        return $this->render('index', [
            'pages' => $pages,
            'category_list' => $firstLevelMeau,
            'news_list' => $list,
            'active_category' => $c1,
        ]);
    }

}
