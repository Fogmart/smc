<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_info".
 *
 * @property int $user_id
 * @property int|null $type_id
 * @property string|null $fio
 * @property string|null $avatar
 * @property string|null $phone
 */
class UserInfo extends \yii\db\ActiveRecord
{
    const TYPES = [
        '1'=>"Клиент",
        '2'=>"Мастер",
        '10'=>"Админ",
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'type_id'], 'integer'],
            [['fio'], 'string', 'max' => 100],
            [['avatar'], 'string', 'max' => 500],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'type_id' => 'Type ID',
            'fio' => 'Fio',
            'avatar' => 'Avatar',
            'phone' => 'Phone',
        ];
    }

    public function getType(){
        return self::TYPES[$this->type_id];
    }
}
