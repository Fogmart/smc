<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "job_type".
 *
 * @property int $id
 * @property int $name
 * @property int $prof_id
 */
class JobType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'job_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'prof_id'], 'required'],
            [['name', ], 'string'],
            [['prof_id'], 'integer'],
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
            'prof_id' => 'Профессия',
        ];
    }
}
