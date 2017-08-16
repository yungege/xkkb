<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\behaviors\TimestampBehavior;
use \yii\db\ActiveRecord;

class News extends ActiveRecord {

    public static function tableName()
    {
        return 'news';
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
            [['en_title','en_desc','en_content','desc','title', 'content', 'cover','status','tags'], 'required', 'message'=> '数据填写有误！'],
            [['admin_id','status','ctime'], 'integer'],
            ['title', 'string', 'max'=>25],
            [['cover','desc','tags','en_title'], 'string', 'max'=>255],
            [['content','en_desc','en_content'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return [
            'create' => ['desc','title','content','cover','tags','en_title','en_desc','en_content'],
            'update' => ['desc','title','content','cover','status','tags','en_title','en_desc','en_content'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id'        => '',
            'title'     => '',
            'desc'      => '',
            'tags'      => '',
            'content'   => '',
            'cover'     => '',
            'category'  => '',
            'admin_id'  => '',
            'status'    => '',
            'ctime'     => '',
            'en_title'  => '',
            'en_desc'   => '',
            'en_content' => '',
        ];
    }

    public function getNewsCountByType(int $type){
        return (self::find())->where([
            'category' => $type,
            'status' => 1]
            )->count();
    }

    public function getNewsListByType(int $type, int $offset = 0, int $limit = 10){
        $query = self::find();

        $query->where(['category' => $type,'status' => 1])->orderBy('ctime DESC');
        return $query->offset($offset)->limit($limit)->all();
    }

    public function getTop3News(){
        $sql = "SELECT id,title,en_title,cover,`category` FROM news WHERE `status` = 1 ORDER BY ctime DESC LIMIT 0,3";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    

}