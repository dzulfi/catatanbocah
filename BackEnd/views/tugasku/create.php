<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tugasku $model */

$this->title = 'Create Tugasku';
$this->params['breadcrumbs'][] = ['label' => 'Tugaskus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tugasku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
