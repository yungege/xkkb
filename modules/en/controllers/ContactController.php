<?php

namespace app\modules\en\controllers;

use Yii;
use yii\web\Controller;
use app\modules\en\controllers\BaseController;

use app\models\Category;

class ContactController extends BaseController
{
    protected $categoryModel;

    public function init(){
        parent::init();
        $this->categoryModel = new Category;
        $this->view->params['activeMeau'] = 6;
    }
    
    public function actionIndex(){
        
        return $this->render('index', [
            // 'category_list' => $firstLevelMeau,
        ]);
    }

    
    
    
}
