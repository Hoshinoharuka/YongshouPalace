<?php
/**
 *  Team: YongShou Palace
 *  Coding by Wang Zichun 1911575, 2021/11/28
 *  athletes' medal graph
 */
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "medalnum_personnum".
 *
 * @property int $medalNum
 * @property int $athleteNum
 */
class MedalPerson extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medalnum_personnum';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['medalNum', 'athleteNum'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'medalNum' => 'Medal Num',
            'athleteNum' => 'Athlete Num',
        ];
    }
}
