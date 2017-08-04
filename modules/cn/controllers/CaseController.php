<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;
use app\modules\cn\controllers\BaseController;
use yii\data\Pagination;
use app\models\Cases;
use app\models\Category;
use yii\web\NotFoundHttpException;

class CaseController extends BaseController
{
    const PAGESIZE = 6;

    protected $categoryModel;
    protected $caseModel;

    public function init(){
        parent::init();
        $this->categoryModel = new Category;
        $this->caseModel = new Cases;
        $this->view->params['activeMeau'] = 3;
    }

    public function actionIndex(){
        $get = Yii::$app->request->get();
        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(5);

        $pn = (!is_numeric($get['page']) || (int)$get['page'] <= 0) ? 1 : $get['page'];
        $c1 = (!is_numeric($get['ca_f']) || (int)$get['ca_f'] <= 0) ? $firstLevelMeau[0]['id'] : $get['ca_f'];
        $offset = ($pn - 1) * self::PAGESIZE;

        $list = [];
        $count = $this->caseModel->getCaseCountByType($c1);
        if($count != 0){
            $list = $this->caseModel->getCaseListByType($c1, $offset, self::PAGESIZE);
        }
        
        $pages = new Pagination([
            'totalCount' => (int)$count,
            'pageSize' => self::PAGESIZE,
        ]);

        return $this->render('index', [
            'pages' => $pages,
            'category_list' => $firstLevelMeau,
            'case_list' => $list,
            'active_category' => $c1,
        ]);
    }

    public function actionDetail(){
        $get = Yii::$app->request->get();

        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(5);

        $c1 = (!is_numeric($get['ca_f']) || (int)$get['ca_f'] <= 0) ? $firstLevelMeau[0]['id'] : $get['ca_f'];

        if(empty($get['id']) || is_int($get['id']))
            throw new NotFoundHttpException("Page not found");

        $info = Cases::findOne((int)$get['id']);

        if(null === $info || $info->status != 1) 
            throw new NotFoundHttpException("Page not found");

        $info = $info->toArray();

        return $this->render('detail', [
            'info' => $info,
            'category_list' => $firstLevelMeau,
            'active_category' => $c1,
        ]);
    }
}