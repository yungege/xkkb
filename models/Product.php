<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\behaviors\TimestampBehavior;
use \yii\db\ActiveRecord;

class Product extends ActiveRecord {

    public static function tableName()
    {
        return 'product';
    }

    public function getProductList4ById(int $id){
        $sql = "SELECT
                    id,pro_name,en_pro_name,pro_cover_pic,en_pro_cover_pic,pro_model,pro_fs_type,en_pro_fs_type,pro_first_type,pro_second_type
                FROM
                    product
                WHERE
                    pro_second_type = {$id}
                AND `status` = 1
                ORDER BY
                    ctime DESC
                LIMIT 0,4";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function getListByPage(int $fType, int $sType, int $offset = 0, int $limit = 12){
        $sql = "SELECT 
                    id,pro_name,en_pro_name,pro_cover_pic,en_pro_cover_pic,pro_first_type,pro_second_type,pro_model,pro_fs_type,en_pro_fs_type
                FROM product 
                WHERE pro_first_type = {$fType} AND pro_second_type = {$sType} AND `status` = 1 
                ORDER BY ctime DESC 
                LIMIT {$offset},{$limit}";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function getCountByType(int $fType, int $sType){
        $sql = "SELECT count(1) AS `num`
                FROM product 
                WHERE pro_first_type = {$fType} AND pro_second_type = {$sType} AND `status` = 1";
        return (int)Yii::$app->db->createCommand($sql)->queryOne()['num'];
    }

    public function searchPro(string $str, int $offset = 0, int $limit = 12){
        $sql = "SELECT 
                    id,pro_name,en_pro_name,pro_cover_pic,en_pro_cover_pic,pro_first_type,pro_second_type,pro_model,pro_fs_type,en_pro_fs_type 
                FROM product 
                WHERE (pro_name LIKE '%{$str}%' OR en_pro_name LIKE '%{$str}%') AND `status` = 1 
                LIMIT {$offset},{$limit}";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function searchProCount(string $str){
        $sql = "SELECT 
                    count(1) AS `num`
                FROM product 
                WHERE (pro_name LIKE '%{$str}%' OR en_pro_name LIKE '%{$str}%') AND `status` = 1";
        return (int)Yii::$app->db->createCommand($sql)->queryOne()['num'];
    }

    public function getTags(){
        $time = strtotime('-1 day');

        $sql = "SELECT pro_first_type,`tag`,en_tag FROM `product` WHERE `tag` <> '' AND ctime >= {$time} GROUP BY pro_first_type,`tag`";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function getCountByTag(int $fType, $tag){
        $sql = "SELECT count(1) AS `num`
                FROM product 
                WHERE pro_first_type = {$fType} AND (tag = '{$tag}' OR en_tag = '{$tag}') AND `status` = 1";
        return (int)Yii::$app->db->createCommand($sql)->queryOne()['num'];
    }

    public function getListByTagPage(int $fType, $tag, int $offset = 0, int $pagesize = 12){
        $sql = "SELECT 
                    id,pro_name,en_pro_name,pro_cover_pic,en_pro_cover_pic,pro_first_type,pro_second_type,pro_model,pro_fs_type,en_pro_fs_type
                FROM product 
                WHERE pro_first_type = {$fType} AND (tag = '{$tag}' OR en_tag = '{$tag}') AND `status` = 1
                LIMIT {$offset},{$pagesize}";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}