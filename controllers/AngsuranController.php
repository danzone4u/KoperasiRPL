<?php
namespace app\controllers;

use app\models\Angsuran;
use app\models\Pinjam;
use yii\db\Command;
use Yii;

class AngsuranController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataPinjam = Yii::$app->db->createCommand("SELECT id_pinjam,nama_peminjam FROM pinjam")
        ->queryAll();
        
        return $this->render('index',['dataPinjam'=>$dataPinjam]);
    }
    public function actionCari()
    {
        $model=new Angsuran();
        if($model->load(Yii::$app->request->post(), '')){
            $id_pinjam=$_POST['Pegawai']['id_pinjam'];
            $dataPinjam = Yii::$app->db->createCommand("SELECT * FROM pinjam WHERE nama_peminjam='$id_pinjam'")
                        ->queryAll();
        return $this->render('index',['dataPinjam'=>$dataPinjam]);

        }
    }

}
