<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tugasku $model */

$this->title = 'Update Tugasku: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tugaskus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tugasku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
