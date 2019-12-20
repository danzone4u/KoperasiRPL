<?php
namespace app\controllers;

use app\models\Pinjam;
use yii\db\Command;
use Yii;

class PinjamController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Pinjam();
        $dataPinjam = Yii::$app->db->createCommand("SELECT * FROM pinjam")
                            ->queryAll();
        
        return $this->render('index',['model'=>$model,'dataPinjam'=>$dataPinjam]);
    }
    public function actionTambah()
    {
        $dataPinjam = Yii::$app->db->createCommand("SELECT * FROM pinjam")
                            ->queryAll();
        
        $model = new Pinjam();

        if($model->load(Yii::$app->request->post(), '')){
            $model=new Pinjam();
            $nama = Yii::$app->request->post('nama');
            $tanggal = Yii::$app->request->post('tanggal');
            $jumlah_pinjam = Yii::$app->request->post('jumlah_pinjam');
            $jaminan = $_POST['Pinjam']['jaminan'];
            $no_seri = Yii::$app->request->post('no_seri');
            $model->nama_peminjam=$nama;
            $model->jumlah_pinjam=$jumlah_pinjam;
            $model->tanggal=$tanggal;
            $model->jaminan=$jaminan;
            $model->no_seri_jaminan=$no_seri;
            $model->save();           

            return $this->redirect(['pinjam/index']);
        }
        return $this->render('tambah', ['model' => $model]);
        
    }

}
