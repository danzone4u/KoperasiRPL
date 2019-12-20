<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pinjam".
 *
 * @property int $id_pinjam
 * @property string $nama_peminjam
 * @property int $jumlah_pinjam
 * @property string $tanggal
 * @property string $jaminan
 * @property string $no_seri_jaminan
 */
class Pinjam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pinjam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_peminjam', 'jumlah_pinjam', 'tanggal', 'jaminan', 'no_seri_jaminan'], 'required'],
            [['jumlah_pinjam'], 'integer'],
            [['tanggal'], 'safe'],
            [['nama_peminjam'], 'string', 'max' => 500],
            [['jaminan', 'no_seri_jaminan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pinjam' => 'Id Pinjam',
            'nama_peminjam' => 'Nama Peminjam',
            'jumlah_pinjam' => 'Jumlah Pinjam',
            'tanggal' => 'Tanggal',
            'jaminan' => 'Jaminan',
            'no_seri_jaminan' => 'No Seri Jaminan',
        ];
    }
}
