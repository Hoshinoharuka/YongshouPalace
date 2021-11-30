<?php
/**
 *  Team: YongShou Palace
 *  Coding by Liu Xingze 1911439, 2021/11/28
 *  message table in db
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property string|null $name
 * @property string|null $email
 * @property string|null $message
 * @property string|null $time
 * @property int $id
 * @property int|null $hide
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['time'], 'safe'],
            [['id'], 'required'],
            [['id', 'hide'], 'integer'],
            [['name', 'email', 'message'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'message' => 'Message',
            'time' => 'Time',
            'id' => 'ID',
            'hide' => 'Hide',
        ];
    }
}
