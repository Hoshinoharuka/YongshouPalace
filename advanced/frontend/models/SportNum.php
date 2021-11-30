<?php
/**
 *  Team: YongShou Palace
 *  Coding by Wu Xinran, 2021/11/28
 *  the number of event per sport graph
 */
namespace app\models;

use Yii;

/**
 * This is the model class for table "sport_num".
 *
 * @property int $sportid
 * @property string $sport
 * @property int $num
 */
class SportNum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sport_num';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sportid', 'sport'], 'required'],
            [['sportid', 'num'], 'integer'],
            [['sport'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sportid' => 'Sportid',
            'sport' => 'Sport',
            'num' => 'Num',
        ];
    }
}
