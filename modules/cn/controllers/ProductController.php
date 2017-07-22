<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;
use app\modules\cn\controllers\BaseController;
use yii\data\Pagination;
use app\models\ProductCategory;

// use app\models\Product;

class ProductController extends BaseController
{
    const PAGESIZE = 3;

    protected $categoryModel;

    public function init(){
        parent::init();
        $this->categoryModel = new ProductCategory;
    }
    
    public function actionIndex(){
        $get = Yii::$app->request->get();
        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList();

        $pn = (!is_numeric($get['pn']) || (int)$get['pn'] <= 0) ? 1 : $get['pn'];
        $c1 = (!is_numeric($get['ca_f']) || (int)$get['ca_f'] <= 0) ? $firstLevelMeau[0]['id'] : $get['ca_f'];
        $offset = ($pn - 1) * self::PAGESIZE;

        $list = [];
        $count = $this->categoryModel->getSecondLevelCategoryCountById($c1);
        if($count != 0){
            $list = $this->categoryModel->getSecondLevelCategoryById($c1, $offset, self::PAGESIZE);
        }
        
        $pages = new Pagination([
            'totalCount' => (int)$count,
            'pageSize' => self::PAGESIZE,
        ]);

        return $this->render('index', [
            'pages' => $pages,
            'category_list' => $firstLevelMeau,
            'list' => $list,
            'active_category' => $c1,
        ]);
    }

}