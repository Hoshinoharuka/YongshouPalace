<?php
/**
 *  Team: YongShou Palace
 *  Coding by Wu Xinran 1911577, 2021/11/28
 *  to construct age distribution graph
 */
namespace app\models;

use Yii;

/**
 * This is the model class for table "agedistribution".
 *
 * @property int $year
 * @property int $undertwenty
 * @property int $underthirty
 * @property int $underfourty
 * @property int $overfourty
 */
class Agedistribution extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agedistribution';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year'], 'required'],
            [['year', 'undertwenty', 'underthirty', 'underfourty', 'overfourty'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'year' => 'Year',
            'undertwenty' => 'Undertwenty',
            'underthirty' => 'Underthirty',
            'underfourty' => 'Underfourty',
            'overfourty' => 'Overfourty',
        ];
    }
}
