<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Transaksi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nominal')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(
            [
                0 => 'Masuk',
                1 => 'Keluar'
            ]
    ) ?>

    <?php
    $dataPost=ArrayHelper::map(\app\models\Kategori::find()
        ->asArray()->all(), 'id', 'kategori');
        echo $form->field($model, 'id_kategori')
            ->dropDownList(
                $dataPost,           
                ['id'=>'kategori']
            );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
