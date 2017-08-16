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
            [['en_title','en_desc','en_content','desc','title','category','pic','status','url'], 'required', 'message'=> '数据填写有误！'],
            [['category','status','ctime'], 'integer'],
            ['title', 'string', 'max'=>25],
            [['pic','url','en_title,'], 'string', 'max'=>255],
            [['desc','content','en_desc','en_content'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return [
            'create' => ['desc','content','title','category','pic','url','en_title','en_desc','en_content'],
            'update' => ['desc','content','title','category','pic','url','status','en_title','en_desc','en_content'],
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
            'en_title'  => '',
            'en_desc'   => '',
            'en_content'=> '',
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
            ->select(['id','pic','title','en_title','category','url'])
            ->orderBy('ctime DESC');
        return $query->offset($offset)->limit($limit)->all();
    }
    
    public function getInfoById(int $id){
        return self::findOne($id)->toArray();
    }

    public function getTop3News(){
        $sql = "SELECT id,title,en_title,pic,`category` FROM support WHERE `status` = 1 AND `category` = 11 ORDER BY ctime DESC LIMIT 0,3";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}