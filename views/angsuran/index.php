<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
$this->title = 'Angsuran';
?>
<div class="container">
    <div class="col-md-6">
    <?php
        $form = ActiveForm::begin([
            'method' => 'post',
            'action' => Url::to(['angsuran/cari']),
        ]);
        ?>
        <table>
            <tr>
                <td>
                <select class="form-control" style="margin-right: 5px;" id="pegawai-id_jabatan" name="Pegawai[id_pinjam]">                        
                <?php
                    foreach($dataPinjam as $jbt){
                ?>
                    <option value= <?=$jbt['nama_peminjam']?>><?=$jbt['nama_peminjam']?></option>
                <?php
                    }
                ?>
            </select>
                </td>
                <td>
                <?= Html::submitButton('Submit', array('class' => 'btn btn-primary', 'style' => 'width:100%; border-radius:0px;')) ?>
                </td>
            </tr>
    </table>
    <?php
        ActiveForm::end();
    ?>
    </div>
    <?php
    if(isset($dataPinjam)){
        ?>
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
    <?php } ?>
</div>