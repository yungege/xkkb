<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\behaviors\TimestampBehavior;
use \yii\db\ActiveRecord;

class Tags extends ActiveRecord {

    public static function tableName()
    {
        return 'tags';
    }

    public function getTags(int $cate = 1, int $type = 1){
        if($type == 1){
            $field = 'tag';
        }
        else{
            $field = 'en_tag';
        }
        $sql = "SELECT id,{$field} as `tag` FROM tags WHERE `category` = {$cate} AND {$field} <> ''";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}