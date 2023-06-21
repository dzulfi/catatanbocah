<?php

use app\models\Kegiatanku;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap5\Modal;
use yii\widgets\ActiveForm;


/** @var yii\web\View $this */
/** @var app\models\KegiatankuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kegiatankus';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="kegiatanku-index">
    <?php Pjax::begin(); ?>

    <div class="diary-title bg-white p-4 row align-items-center round-4 mb-4">
        <div class=" col-12 col-sm-7 text-center text-sm-start">
            <h2>Kegiatanku</h2>
            Catat momen-momen berharga, dan kejadian sehari-hari.
        </div>
        <div class="col-12 col-sm-5">
            <button type=" button" class="btn btn-success btn-transaksi mt-3 border border-0 mt-sm-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="material-icons md-36">add</span>
                <?= Html::a('Tambah Kegiatan', ['create'], ['class' => 'btn btn-success btn-transaksi mt-3 border border-0 mt-sm-0']) ?>
            </button>
        </div>
    </div>

    <?php foreach ($dataProvider->models as $data) { ?>
        <div class="diary-item bg-white p-4 row align-items-center round-4 mb-4">
            <div class="col-12 col-sm-7">
                <h4 class="text-center text-sm-start"><?= $data->judul ?></h4>
            </div>
            <div class="col-12 col-sm-5 diary-item-action mt-3 m-sm-0">
                <a href="<?= Url::to(['update', 'id' => $data->id]) ?>" class="btn btn-success me-1">
                    <span class="material-icons md-36">edit</span>
                </a>
                <?= Html::a('delete', ['delete', 'id' => $data->id], ['class' => 'btn btn-danger material-icons md-36']) ?>
            </div>
            <hr class="mt-2">
            <p>
                <?= $data->kegiatan ?>
            </p>
        </div>
    <?php } ?>

    <!-- <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'judul',
                    'kegiatan',
                    'tanggal',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Kegiatanku $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?> -->

    <?php Pjax::end(); ?>

</div>