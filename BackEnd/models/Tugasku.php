<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tugasku".
 *
 * @property int $id
 * @property int $id_user
 * @property string $mapel
 * @property string $keterangan
 * @property string $tanggal
 * @property int $status
 */
class Tugasku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tugasku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mapel', 'keterangan', 'status'], 'required'],
            [['id_user', 'status'], 'integer'],
            [['tanggal'], 'safe'],
            [['mapel'], 'string', 'max' => 50],
            [['keterangan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'mapel' => 'Mapel',
            'keterangan' => 'Keterangan',
            'tanggal' => 'Tanggal',
            'status' => 'Status',
        ];
    }
}
