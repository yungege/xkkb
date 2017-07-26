<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\behaviors\TimestampBehavior;
use \yii\db\ActiveRecord;

class Support extends ActiveRecord {

    public static function tableName()
    {
        return 'support';
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
            [['desc','title','category','pic','status','url'], 'required', 'message'=> '数据填写有误！'],
            [['category','status','ctime'], 'integer'],
            ['title', 'string', 'max'=>25],
            [['pic','url'], 'string', 'max'=>255],
            [['desc','content'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return [
            'create' => ['desc','content','title','category','pic','url'],
            'update' => ['desc','content','title','category','pic','url','status'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id'        => '',
            'title'     => '',
            'desc'      => '',
            'content'   => '',
            'category'  => '',
            'pic'       => '',
            'url'       => '',
            'status'    => '',
            'ctime'     => '',
        ];
    }

    public function getSupportCountByType(int $type){
        return (self::find())->where([
            'category' => $type,
            'status' => 1]
            )->count();
    }

    public function getSupportListByType(int $type, int $offset = 0, int $limit = 10){
        $query = self::find();

        $query->where(['category' => $type,'status' => 1])
            ->select(['id','pic','title','category','url']);
        return $query->offset($offset)->limit($limit)->all();
    }
    
    public function getInfoById(int $id){
        return self::findOne($id)->toArray();
    }
}