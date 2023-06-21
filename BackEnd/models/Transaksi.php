<?php

namespace app\models;

use Yii;
use app\models\Kategori;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_kategori
 * @property int $nominal
 * @property string $keterangan
 * @property string $tanggal
 * @property int $status
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori', 'nominal', 'keterangan', 'status'], 'required'],
            [['id_user', 'id_kategori', 'nominal', 'status'], 'integer'],
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
            'status' => 'Status',
        ];
    }

    public function getKategori()
    {
        // same as above
        return $this->hasOne(Kategori::class, ['id' => 'id_kategori']);
    }
}
