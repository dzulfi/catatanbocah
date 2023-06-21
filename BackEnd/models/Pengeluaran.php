<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengeluaran".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_kategori
 * @property int $nominal
 * @property string $keterangan
 * @property string $tanggal
 */
class Pengeluaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengeluaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_kategori', 'nominal', 'keterangan'], 'required'],
            [['id_user', 'id_kategori', 'nominal'], 'integer'],
            [['tanggal'], 'safe'],
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
            'id_kategori' => 'Id Kategori',
            'nominal' => 'Nominal',
            'keterangan' => 'Keterangan',
            'tanggal' => 'Tanggal',
        ];
    }
}
