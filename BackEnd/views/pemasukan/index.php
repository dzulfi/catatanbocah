<?php

use app\models\Pemasukan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\PemasukanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemasukans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemasukan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemasukan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
        <div class="col">
          <div class="card border border-0 py-3">
            <div class="card-body text-center">
              <h5 class="card-title">Pemasukan</h5>
              <p class="card-text keuangan-icon text-center">
                <span class="material-icons md-36">arrow_downward</span>
                <span>Rp 150.000</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border border-0 py-3">
            <div class="card-body text-center">
              <h5 class="card-title">Pengeluaran</h5>
              <p class="card-text keuangan-icon text-center">
                <span class="material-icons md-36 bg-danger">arrow_upward</span>
                <span>Rp 150.000</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border border-0 py-3">
            <div class="card-body text-center">
              <h5 class="card-title">Saldo</h5>
              <p class="card-text keuangan-icon text-center">
                <span class="material-icons md-36 bg-primary">account_balance_wallet</span>
                <span>Rp 50.000</span>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="content-keuangan bg-white p-3 p-sm-4 p-md-5 ">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h2 class="text-center text-sm-start"><b>Catat keuangan</b></h2>
            <span class="text-center text-sm-start">kelola keuangan anda dengan mudah</span>
          </div>
          <div class="col-12 col-sm-6 d-flex">
            <button type="button" class="btn btn-success btn-transaksi mt-3 border border-0 mt-sm-0"
              data-bs-toggle="modal" data-bs-target="#exampleModal">
              <span class="material-icons md-36">add</span> Tambah Transaksi
            </button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table mt-5  table-striped table-hover" padding="10">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kategori</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nominal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Buku Paket</td>
                <td>Beli Buku paket</td>
                <td>20 Mei 2023</td>
                <td class="text-success">Rp.120.000</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Buku Paket</td>
                <td>Beli Buku paket</td>
                <td>20 Mei 2023</td>
                <td class="text-success">Rp.120.000</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Buku Paket</td>
                <td>Beli Buku paket</td>
                <td>20 Mei 2023</td>
                <td class="text-success">Rp.120.000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_user',
            'id_kategori',
            'nominal',
            'keterangan',
            //'tanggal',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pemasukan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
