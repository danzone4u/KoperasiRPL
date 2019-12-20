<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $id_karyawan
 * @property string $nama_karyawan
 * @property string $username
 * @property string $password
 * @property string $alamat_karyawan
 * @property string $role
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_karyawan', 'username', 'password', 'alamat_karyawan', 'role'], 'required'],
            [['nama_karyawan', 'username', 'password'], 'string', 'max' => 255],
            [['alamat_karyawan'], 'string', 'max' => 500],
            [['role'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_karyawan' => 'Id Karyawan',
            'nama_karyawan' => 'Nama Karyawan',
            'username' => 'Username',
            'password' => 'Password',
            'alamat_karyawan' => 'Alamat Karyawan',
            'role' => 'Role',
        ];
    }
}
