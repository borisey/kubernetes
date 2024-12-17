<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class Bill extends ActiveRecord
{
    public static function tableName()
    {
        return 'bill';
    }
}
