<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pemasukan $model */

$this->title = 'Update Pemasukan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pemasukans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemasukan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
