<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "support_tickets".
 *
 * @property int $id
 * @property int $src_user_id
 * @property int|null $worker_id
 * @property string $subject
 */
class SupportTicket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support_tickets';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['src_user_id', 'subject'], 'required'],
            [['src_user_id', 'worker_id'], 'integer'],
            [['subject'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'src_user_id' => 'Src User ID',
            'worker_id' => 'Worker ID',
            'subject' => 'Subject',
        ];
    }


    public function getMessages(){
        return $this->hasMany(SupportMessage::className(),['ticket_id'=>'id']);
    }

    public function getAutor(){
        return $this->hasOne(User::className(),['id'=>'src_user_id']);
    }

}
