<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;
use app\modules\cn\controllers\BaseController;
use app\models\Category;
use yii\data\Pagination;
use app\models\Support;
use yii\web\NotFoundHttpException;

class SupportController extends BaseController
{
    const PAGESIZE = 5;

    protected $categoryModel;
    protected $supportModel;

    public function init(){
        parent::init();
        $this->categoryModel = new Category;
        $this->supportModel = new Support;
    }
    
    public function actionIndex(){
        $get = Yii::$app->request->get();
        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(3);

        $pn = (!is_numeric($get['page']) || (int)$get['page'] <= 0) ? 1 : $get['page'];
        $c1 = (!is_numeric($get['ca_f']) || (int)$get['ca_f'] <= 0) ? $firstLevelMeau[0]['id'] : $get['ca_f'];
        $offset = ($pn - 1) * self::PAGESIZE;

        

        $list = [];
        $count = $this->supportModel->getSupportCountByType($c1);
        if($count != 0){
            $list = $this->supportModel->getSupportListByType($c1, $offset, self::PAGESIZE);
        }
        
        $pages = new Pagination([
            'totalCount' => (int)$count,
            'pageSize' => self::PAGESIZE,
        ]);

        return $this->render('index', [
            'pages' => $pages,
            'category_list' => $firstLevelMeau,
            'support_list' => $list,
            'active_category' => $c1,
        ]);
    }

    public function actionService(){
        $get = Yii::$app->request->get();
        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(3);

        $c1 = (!is_numeric($get['ca_f']) || (int)$get['ca_f'] <= 0) ? $firstLevelMeau[0]['id'] : $get['ca_f'];

        return $this->render('service', [
            'category_list' => $firstLevelMeau,
            'active_category' => $c1,
        ]);
    }

    public function actionDetail(){
        $get = Yii::$app->request->get();

        if(!is_numeric($get['id']) || $get['id'] <= 0){
            throw new NotFoundHttpException('PAGE NOT FOUND.'); 
        }

        $cont = $this->supportModel->getInfoById($get['id']);

        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(3);

        $c1 = (!is_numeric($get['ca_f']) || (int)$get['ca_f'] <= 0) ? $firstLevelMeau[0]['id'] : $get['ca_f'];

        

        return $this->render('detail', [
            'category_list' => $firstLevelMeau,
            'active_category' => $c1,
            'cont' => $cont,
        ]);
    }

}
