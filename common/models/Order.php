<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $prof_id
 * @property int $job_type_id
 * @property int $city_id
 * @property int $district_id
 * @property int|null $price
 * @property int $level
 * @property int $status
 * @property string|null $phone
 * @property int|null $timelimit
 * @property string $whncrt
 */
class Order extends \yii\db\ActiveRecord
{

    const LEVEL = [
        '1'=>"1",
        '2'=>"2",
        '3'=>"3",
        '4'=>"4",
        '5'=>"5",
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prof_id', 'job_type_id', 'city_id', 'district_id', 'level'], 'required'],
            [['prof_id', 'job_type_id', 'city_id', 'district_id', 'price', 'level', 'status', 'timelimit'], 'integer'],
            [['phone'], 'string'],
            [['whncrt'], 'safe'],
            [['crt_by'], 'safe'],
            [['take_by'], 'safe'],
            [['desctipt'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prof_id' => 'Профессия',
            'job_type_id' => 'Тип работ',
            'city_id' => 'Город',
            'district_id' => 'Район',
            'price' => 'Цена',
            'level' => 'Сложность',
            'status' => 'Статус',
            'phone' => 'Телефон',
            'timelimit' => 'Срок',
            'whncrt' => 'Когда создан',
            'desctipt' => 'Описание',
        ];
    }

    public function getCity(){
        return $this->hasOne(City::className(),['id'=>'city_id']);
    }

    public function getDistrict(){
        return $this->hasOne(District::className(),['id'=>'district_id']);
    }

    public function getJobType(){
        return $this->hasOne(JobType::className(),['id'=>'job_type_id']);
    }

    public function getProf(){
        return $this->hasOne(Prof::className(),['id'=>'prof_id']);
    }

    public function getWhocrt(){
        return $this->hasOne(User::className(),['id'=>'crt_by']);
    }


    public function getLevelname(){
        return self::LEVEL[$this->level];
    }

    public function getWhn(){
        return date('d.m.Y', $this->whncrt);
    }

    public function getIsmy(){
        return $this->take_by == \Yii::$app->user->identity->getId();
    }

}
