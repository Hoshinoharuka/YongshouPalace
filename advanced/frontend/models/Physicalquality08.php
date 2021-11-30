<?php
/**
 *  Team: YongShou Palace
 *  Coding by Wu Xinran 1911577, 2021/11/28
 *  construct physical quality graph
 */
namespace app\models;

use Yii;

/**
 * This is the model class for table "physicalquality_08".
 *
 * @property int $ID
 * @property string $Sex
 * @property int|null $height
 * @property int|null $weight
 * @property int $year
 */
class Physicalquality08 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'physicalquality_08';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Sex', 'year'], 'required'],
            [['ID', 'height', 'weight', 'year'], 'integer'],
            [['Sex'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Sex' => 'Sex',
            'height' => 'Height',
            'weight' => 'Weight',
            'year' => 'Year',
        ];
    }
}
