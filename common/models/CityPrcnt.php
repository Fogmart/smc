<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "city_prcnt".
 *
 * @property int $id
 * @property int $city_id
 * @property int $prof_id
 * @property int $prcnt
 */
class CityPrcnt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city_prcnt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city_id', 'prof_id', 'prcnt'], 'required'],
            [['city_id', 'prof_id', 'prcnt'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city_id' => 'City ID',
            'prof_id' => 'Prof ID',
            'prcnt' => 'Prcnt',
        ];
    }
}
