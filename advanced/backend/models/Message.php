<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property string $name
 * @property string $email
 * @property string|null $message
 * @property string $time
 * @property int $id
 * @property int $hide
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
            [['name', 'email', 'id'], 'required'],
            [['time'], 'safe'],
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
