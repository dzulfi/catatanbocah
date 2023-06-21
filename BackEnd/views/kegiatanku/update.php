<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Kegiatanku $model */

$this->title = 'Update Kegiatanku: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kegiatankus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kegiatanku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
