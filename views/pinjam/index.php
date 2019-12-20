<?php
/* @var $this yii\web\View */

use app\models\Pinjam;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
$this->title = 'Pinjaman';
?>
<div class="container">
<?= Html::a('+ Pinjam', ['tambah']) ?>
    <div class="col-md-12">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Nama</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jaminan</th>
                <th scope="col">No Seri Jaminan</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($dataPinjam as $row){
        ?>
            <tr>
                <td><?=$row['nama_peminjam']?></td>
                <td>Rp. <?= number_format($row['jumlah_pinjam'], 2, ',', '.')?> </td>
                <td><?=$row['tanggal']?></td>
                <td><?=$row['jaminan']?></td>
                <td><?=$row['no_seri_jaminan']?></td>                
            </tr>
            <?php
            }
        ?>
        

            </tbody>
            </table>
        <p align="center"> Keterangan Jaminan</p>
        <li>0 : Sertifikat</li>
        <li>1 : BPKB</li>
        <li>2 : SK</li>
    </div>
</div>