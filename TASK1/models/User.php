<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $user
 * @property string $pass
 * @property string $sPass
 * @property string $email
 * @property string $jk
 * @property string $nama
 * @property string $tglLahir
 * @property int $isActive
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'pass', 'sPass', 'email', 'jk', 'nama', 'tglLahir', 'isActive'], 'required'],
            [['jk'], 'string'],
            [['tglLahir'], 'safe'],
            [['isActive'], 'integer'],
            [['user', 'pass', 'sPass', 'email', 'nama'], 'string', 'max' => 50],
            [['user'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'pass' => 'Pass',
            'sPass' => 'S Pass',
            'email' => 'Email',
            'jk' => 'Jk',
            'nama' => 'Nama',
            'tglLahir' => 'Tgl Lahir',
            'isActive' => 'Is Active',
        ];
    }
}
