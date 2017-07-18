<?php
namespace app\models;

use Yii;
use yii\base\Model;
use \yii\db\ActiveRecord;

class Meau extends ActiveRecord {

    public static function tableName()
    {
        return 'meau_index';
    }

    public function attributeLabels()
    {
        return [
            'id'            => 'ID',
            'url'           => 'URL',
            'meau'          => '导航名称',
            'show'          => '下拉菜单',
            'show_limit'    => '下拉菜单数量限制',
            'admin_id'      => '管理员',
            'sort'          => '排序',
            'status'        => '当前状态',
            'ctime'         => '创建时间',
        ];
    }

    public function getMeauList(){
        $sql = "SELECT * FROM meau_index WHERE `status` = 1 ORDER BY `sort`,`id` DESC";
        $list = Yii::$app->db->createCommand($sql)->queryAll();
        return $list;
    }

}