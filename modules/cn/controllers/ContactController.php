<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;
use app\modules\cn\controllers\BaseController;

use app\models\Category;

class ContactController extends BaseController
{
    protected $categoryModel;

    public function init(){
        parent::init();
        $this->categoryModel = new Category;
    }
    
    public function actionIndex(){
        
        return $this->render('index', [
            // 'category_list' => $firstLevelMeau,
        ]);
    }

    
    
    
}
