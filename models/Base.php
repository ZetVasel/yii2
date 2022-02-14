<?php
namespace app\models;

use yii\db\ActiveRecord;

class Base extends ActiveRecord
{

    public static function tableName(){
        return 'base';
    }
}