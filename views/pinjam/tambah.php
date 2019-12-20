<?php
use app\models\Pinjam;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
$tittle='Tambah Data';

?>
<div class="container">
<div class="col-md-6">
    <?php
        $form = ActiveForm::begin([
            'method' => 'post',
            'action' => Url::to(['pinjam/tambah']),
        ]);
        ?>
        <tr>
            <td>
            <?= Html::label('Nama', 'xxx') ?>
            </td>
            <td>
                <?= Html::textInput('nama', '', ['class' => 'form-control']) ?>
            </td>
        </tr>
        <tr>
            <td>
            <?= Html::label('tanggal', 'xxx') ?>
            </td>
            <td>
                <?= Html::textInput('tanggal','' , ['class' => 'form-control','type'=>'date']) ?>
            </td>
        </tr>
        <tr>
            <td>
            <?= Html::label('Jumlah Pinjam', 'xxx') ?>
            </td>
            <td>
                <?= Html::textInput('jumlah_pinjam','' , ['class' => 'form-control','id'=>'pinjam']) ?>
            </td>
        </tr>
        <tr>
        <?php
            $listData=['Sertifikat Tanah','BPKB','SK'];
            echo $form->field($model,'jaminan')->dropDownList(
                $listData, 
                ['prompt'=>'Pilih Jaminan','id'=>'jaminan'],
                array('class'=>'form-control')
                );
            ?>
        </tr>
        <tr>
            <td>
            <?= Html::label('No Seri Jaminan', 'xxx') ?>
            </td>
            <td>
                <?= Html::textInput('no_seri','' , ['class' => 'form-control']) ?>
            </td>
        </tr>
        <tr>
        <br>
        <?= Html::submitButton('Submit', array('class' => 'btn btn-primary', 'style' => 'width:100%; border-radius:0px;')) ?>
        </tr>
        <?php
        ActiveForm::end();
?>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){

        // Format mata uang.
        $( '#pinjam' ).mask('000.000.000.000.000', {reverse: true});

    })
</script>