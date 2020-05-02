<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_motor".
 *
 * @property int $motorId
 * @property string|null $motorName
 * @property float|null $motorPrice
 * @property float|null $motorDiscount
 */
class Motor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_motor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['motorPrice', 'motorDiscount'], 'number'],
            [['motorName'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'motorId' => 'Motor ID',
            'motorName' => 'Motor Name',
            'motorPrice' => 'Motor Price',
            'motorDiscount' => 'Motor Discount',
        ];
    }
}
