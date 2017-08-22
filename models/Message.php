<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\behaviors\TimestampBehavior;
use \yii\db\ActiveRecord;

class Message extends ActiveRecord {

    public static function tableName()
    {
        return 'message';
    }
    

}