<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "angsuran".
 *
 * @property int $id_angsuran
 * @property string $nama_user
 * @property string $tanggal
 * @property string $jumlah_angsuran
 */
class Angsuran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'angsuran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_user', 'tanggal', 'jumlah_angsuran'], 'required'],
            [['tanggal'], 'safe'],
            [['jumlah_angsuran'], 'string'],
            [['nama_user'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_angsuran' => 'Id Angsuran',
            'nama_user' => 'Nama User',
            'tanggal' => 'Tanggal',
            'jumlah_angsuran' => 'Jumlah Angsuran',
        ];
    }
}
