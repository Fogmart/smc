<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "prof".
 *
 * @property int $id
 * @property string $name
 * @property int|null $prcnt
 */
class Prof extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prof';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['prcnt'], 'integer'],
            [['name'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'prcnt' => 'Процент',
        ];
    }

    public function getJobtypes(){
        return $this->hasMany(JobType::className(),["prof_id"=>"id"]);
    }
}
