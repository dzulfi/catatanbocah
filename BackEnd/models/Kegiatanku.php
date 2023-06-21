<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kegiatanku".
 *
 * @property int $id
 * @property int $id_user
 * @property string $judul
 * @property string $kegiatan
 * @property string $tanggal
 */
class Kegiatanku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kegiatanku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user','judul', 'kegiatan'], 'required'],
            [['id_user'], 'integer'],
            [['tanggal'], 'safe'],
            [['judul'], 'string', 'max' => 50],
            [['kegiatan'], 'string', 'max' => 255],
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
            'judul' => 'Judul',
            'kegiatan' => 'Kegiatan',
            'tanggal' => 'Tanggal',
        ];
    }
}
