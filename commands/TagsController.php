<?php

namespace app\commands;

use Yii;
use yii\console\Controller;

use app\models\Product;
use app\models\Tags;

class TagsController extends Controller
{

    protected $productModel;

    public function init(){
        $this->productModel = new Product;
    }
    
    public function actionIndex()
    {

        $tags = $this->productModel->getTags();
        if(empty($tags)) exit;

        foreach ($tags as $row) {
            $cate = (int)$row['pro_first_type'];
            $tag = addslashes($row['tag']);
            $enTag = addslashes($row['en_tag']);
            $tagExists = Tags::findOne([
                'category' => $cate, 
                'tag' => $tag, 
                'status' => 1
            ]);
            if($tagExists !== null) continue;

            $model = new Tags;
            $model->category = $cate;
            $model->tag      = $tag;
            $model->en_tag   = $enTag;
            $model->ctime    = time();
            $model->save();
        }
    }
}
