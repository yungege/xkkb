<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;
use app\modules\cn\controllers\BaseController;
use yii\data\Pagination;
use app\models\News;
use app\models\Category;
use yii\web\NotFoundHttpException;

class NewsController extends BaseController
{
    const PAGESIZE = 5;

    protected $categoryModel;
    protected $newsModel;

    public function init(){
        parent::init();
        $this->categoryModel = new Category;
        $this->newsModel = new News;
        $this->view->params['activeMeau'] = 5;
    }
    
    public function actionIndex(){
        $get = Yii::$app->request->get();
        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(2);

        $pn = (!is_numeric($get['page']) || (int)$get['page'] <= 0) ? 1 : $get['page'];
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

    public function actionDetail(){
        $get = Yii::$app->request->get();

        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(2);

        $c1 = (!is_numeric($get['ca_f']) || (int)$get['ca_f'] <= 0) ? $firstLevelMeau[0]['id'] : $get['ca_f'];

        if(empty($get['id']) || is_int($get['id']))
            throw new NotFoundHttpException("Page not found");

        $info = News::findOne((int)$get['id']);

        if(null === $info || $info->status == -9) 
            throw new NotFoundHttpException("Page not found");

        $info = $info->toArray();

        return $this->render('detail', [
            'info' => $info,
            'category_list' => $firstLevelMeau,
            'active_category' => $c1,
        ]);
        
    }

}
