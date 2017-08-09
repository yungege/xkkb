<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\behaviors\TimestampBehavior;
use \yii\db\ActiveRecord;

class Category extends ActiveRecord {

    public static function tableName()
    {
        return 'category';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class'      => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['ctime'],
                ],
            ],
        ];
    }

    public function rules()
    {
        return [
            [['type','pid', 'catename', 'cate_icon','cate_hover_icon','cate_sort','status'], 'required', 'message'=> '数据填写有误！'],
            [['pid','cate_sort','status','ctime','cate_level','type'], 'integer'],
            ['catename', 'string', 'max'=>12],
            [['cate_icon','cate_hover_icon'], 'string', 'max'=>255],
            [['cate_desc','admin_id'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return [
            'createFirstLeval' => ['type','catename','cate_icon','cate_hover_icon','cate_sort'],
            'createSecondLeval' => ['pid','catename','cate_level'],
            'updateFirstLeval' => ['type','pid','catename','cate_icon','cate_hover_icon','cate_sort','status','cate_level'],
            'updateSecondLeval' => ['pid','catename','status','cate_level'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id'                => '',
            'pid'               => '',
            'cate_name'         => '',
            'cate_icon'         => '',
            'cate_hover_icon'   => '',
            'cate_desc'         => '',
            'cate_sort'         => '',
            'cate_level'        => '',
            'admin_id'          => '',
            'status'            => '',
            'ctime'             => '',
            'type'              => '',
        ];
    }

    public function getFirstLevelMeauList(int $type){
        $sql = "SELECT * FROM `category` WHERE `type`= {$type} AND `status` = 1 AND `pid` = 0 ORDER BY `cate_sort` ASC,`ctime` DESC";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function getOneFirstCategory(int $type){
        $sql = "SELECT * FROM `category` WHERE `type`= {$type} AND `status` = 1 AND `pid` = 0 ORDER BY `cate_sort` ASC,`ctime` DESC LIMIT 0,1";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function getSecondLevelCategoryCountById(int $id){
        $query = self::find();
        return $query->where([
            'pid' => $id,
            'status' => 1,
        ])->count();
    }

    public function getSecondLevelCategoryById(int $id, int $offset = 0, int $limit = 3){
        $sql = "SELECT id,pid,cate_name FROM `category` WHERE `pid`= {$id} AND `status` = 1 AND `cate_level` = 2 ORDER BY `id` ASC LIMIT {$offset},{$limit}";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

}