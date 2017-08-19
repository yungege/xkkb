<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Html;
use app\modules\cn\controllers\BaseController;

use app\models\Banner;
use app\models\Category;
use app\models\Qualification;
use app\models\News;
use app\models\Support;
use app\models\Cases;
use app\models\Message;
use app\models\AboultImg;

class IndexController extends BaseController
{
    protected $categoryModel;
    protected $qualification;
    protected $bannerModel;
    protected $newsModel;
    protected $supportModel;
    protected $caseModel;
    protected $imgModel;

    public function init(){
        parent::init();
        $this->categoryModel = new Category;
        $this->qualification = new Qualification;
        $this->bannerModel = new Banner;
        $this->newsModel = new News;
        $this->supportModel = new Support;
        $this->caseModel = new Cases;
        $this->imgModel = new AboultImg;
    }
    
    public function actionIndex(){
        $this->view->params['activeMeau'] = 0;
        $this->view->params['show'] = -1;

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

        $gcImgs = $this->imgModel->getImgListByType(1);
        $ckImgs = $this->imgModel->getImgListByType(2);

        $this->view->params['activeMeau'] = 1;
        return $this->render('aboult', [
            'category_list' => $firstLevelMeau,
            'active_category' => $c1,
            'list' => $list,
            'gcImg' => $gcImgs,
            'ckImg' => $ckImgs,
        ]);
    }

    public function actionCont(){
        $emailPreg = "/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/";
        $post = Yii::$app->request->post();
        if(empty(trim($post['mobile'])) || !preg_match("/^1\d{10}$/", trim($post['mobile']))){
            $this->error('请输入正确的手机号.');
        }

        if(!empty(trim($post['email'])) && !preg_match($emailPreg, trim($post['email']))){
            $this->error('请输入正确的邮箱地址.');
        }

        $model = new Message;

        $model->name = Html::encode(trim($post['name']));
        $model->mobile = Html::encode(trim($post['mobile']));
        $model->email = Html::encode(trim($post['email']));
        $model->addr = Html::encode(trim($post['address']));
        $model->desc = Html::encode(trim($post['desc']));
        $model->ctime = time();

        $res = $model->save();
        if($res === false){
            $this->error('服务繁忙,请稍后再试.');
        }
        else{
            $this->out();
        }
    }
}
