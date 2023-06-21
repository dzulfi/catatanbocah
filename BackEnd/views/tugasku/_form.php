<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tugasku $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tugasku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mapel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(
        [
            0 => 'Belum dikerjakan',
            1 => 'Sudah dikerjakan'
        ]
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
