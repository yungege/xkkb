<?php

namespace app\modules\en\controllers;

use Yii;
use yii\web\Controller;
use app\modules\en\controllers\BaseController;
use yii\data\Pagination;
use app\models\Category;
use app\models\Product;
use app\models\Tags;
use yii\web\NotFoundHttpException;

class ProductController extends BaseController
{
    const PAGESIZE = 3;

    protected $categoryModel;
    protected $productModel;
    protected $tagModel;

    public function init(){
        parent::init();
        $this->categoryModel = new Category;
        $this->productModel = new Product;
        $this->view->params['activeMeau'] = 2;
        $this->tagModel = new Tags;
    }
    
    public function actionIndex(){
        $get = Yii::$app->request->get();
        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(1);

        $pn = (!is_numeric($get['page']) || (int)$get['page'] <= 0) ? 1 : $get['page'];
        $c1 = (!is_numeric($get['ca_f']) || (int)$get['ca_f'] <= 0) ? $firstLevelMeau[0]['id'] : $get['ca_f'];
        $offset = ($pn - 1) * self::PAGESIZE;

        $list = [];
        $count = $this->categoryModel->getSecondLevelCategoryCountById($c1);
        if($count != 0){
            $list = $this->categoryModel->getSecondLevelCategoryById($c1, $offset, self::PAGESIZE);
        }

        if(!empty($list)){
            foreach ($list as &$lv) {
                $proList = (array)$this->productModel->getProductList4ById($lv['id']);
                $lv['proList'] = $proList;
            }
            
        }
        
        $pages = new Pagination([
            'totalCount' => (int)$count,
            'pageSize' => self::PAGESIZE,
        ]);

        $tags = $this->tagModel->getTags($c1, 2);

        return $this->render('index', [
            'pages' => $pages,
            'category_list' => $firstLevelMeau,
            'list' => $list,
            'active_category' => $c1,
            'tags' => $tags,
        ]);
    }

    public function actionDetail(){
        $get = Yii::$app->request->get();
        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(1);

        $c1 = (int)$get['ca_f'];
        $c2 = (int)$get['ca_s'];
        $id = (int)$get['id'];

        if($id <= 0 || $c1 <= 0 || $c2 <= 0){
            throw new NotFoundHttpException("Page not found");
        }

        $model = Product::findOne([
            'id' => $id, 
            'pro_first_type' => (int)$c1,
            'pro_second_type' => (int)$c2
        ]);

        if($model === null){
            throw new NotFoundHttpException("Page not found");
        }

        return $this->render('detail', [
            'info' => $model->toArray(),
            'category_list' => $firstLevelMeau,
            'active_category' => $c1,
            'tags' => $this->tagModel->getTags($c1, 2),
        ]);
    }

    public function actionSeclist(){
        $get = Yii::$app->request->get();
        $pageSize = 12;

        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(1);

        $c1 = (int)$get['ca_f'];
        $c2 = (int)$get['ca_s'];
        $pn = (!is_numeric($get['page']) || (int)$get['page'] <= 0) ? 1 : $get['page'];
        $offset = ($pn - 1) * $pageSize;

        if($c1 <= 0 || $c2 <= 0){
            throw new NotFoundHttpException("Page not found");
        }

        $catExists = Category::findOne([
            'id' => $c2,
            'pid' => $c1,
            'status' => 1,
        ]);
        if($catExists === null){
            throw new NotFoundHttpException("Page not found");
        }

        $list = [];
        $count = $this->productModel->getCountByType($c1, $c2);
        if($count > 0){
            $list = $this->productModel->getListByPage($c1, $c2, $offset, $pageSize);
        }

        $pages = new Pagination([
            'totalCount' => $count,
            'pageSize' => $pageSize,
        ]);

        $sTitle = Category::findOne($c2)->en_cate_name;

        return $this->render('list', [
            'pages' => $pages,
            'category_list' => $firstLevelMeau,
            'list' => $list,
            'active_category' => $c1,
            'mTitle' => $sTitle,
            'tags' => $this->tagModel->getTags($c1, 2),
        ]);
        
    }

    public function actionSearch(){
        $list = [];
        $pageSize = 12;
        $count = 0;
        
        $get = Yii::$app->request->get();
        $kw = trim($get['kw']);
        $pn = (!is_numeric($get['page']) || (int)$get['page'] <= 0) ? 1 : $get['page'];
        $offset = ($pn - 1) * $pageSize;

        if(!empty($kw)){
            $kw = addslashes(htmlspecialchars($this->filterKeyword($kw)));
        
            $count = $this->productModel->searchProCount($kw);
            if($count > 0){
                $list = $this->productModel->searchPro($kw, $offset, $pageSize);
            }
        }

        $pages = new Pagination([
            'totalCount' => $count,
            'pageSize' => $pageSize,
        ]);

        if(!empty($list)){
            $fids = array_unique(array_column($list, 'pro_first_type'));
            $sids = array_unique(array_column($list, 'pro_second_type'));

            $fList = array_column($this->categoryModel->getCategoryInfoByIds($fids), null, 'id');
            $sList = array_column($this->categoryModel->getCategoryInfoByIds($sids), null, 'id');

            foreach ($list as &$lv) {
                $lv['f_name'] = $fList[$lv['pro_first_type']]['cate_name'];
                $lv['s_name'] = $sList[$lv['pro_second_type']]['cate_name'];
            }
        }

        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(1);

        return $this->render('search', [
            'pages' => $pages,
            'category_list' => $firstLevelMeau,
            'list' => $list,
            'kw' => $kw,
            'count' => $count,
            'pageCount' => ceil($count/$pageSize),
        ]);

    }

    private function filterKeyword($string) { 
        $keyword = 'select|insert|update|delete|\'|\/\*|\*|\.\.\/|\.\/|union|and|union|order|or|into|load_file|outfile';
        $arr = explode('|', $keyword);
        $result = str_ireplace($arr, '', $string);
        return $result;
    }

    public function actionTag(){
        $get = Yii::$app->request->get();
        $pageSize = 12;
        $firstLevelMeau = $this->categoryModel->getFirstLevelMeauList(1);

        $c1 = (int)$get['ca_f'];
        $tag = (int)$get['tag'];
        $pn = (!is_numeric($get['page']) || (int)$get['page'] <= 0) ? 1 : $get['page'];
        $offset = ($pn - 1) * $pageSize;

        if($c1 <= 0 || $tag <= 0){
            throw new NotFoundHttpException("Page not found");
        }

        $tagTitle = Tags::findOne($tag)->en_tag;
        $sTitle = Category::findOne($c1)->en_cate_name;

        $list = [];
        $count = $this->productModel->getCountByTag($c1, $tagTitle);
        if($count > 0){
            $list = $this->productModel->getListByTagPage($c1, $tagTitle, $offset, $pageSize);
        }

        $pages = new Pagination([
            'totalCount' => $count,
            'pageSize' => $pageSize,
        ]);

        $tags = $this->tagModel->getTags($c1, 2);
        return $this->render('tag',[
            'tags' => $tags,
            'sTitle' => ($sTitle . ' . ' . $tagTitle),
            'page' => $pages,
            'list' => $list,
            'category_list' => $firstLevelMeau,
            'active_category' => $c1,
        ]);
    }

}
