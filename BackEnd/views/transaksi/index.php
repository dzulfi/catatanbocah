<?php

use app\models\Transaksi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TransaksiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transaksis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
        <div class="col">
          <div class="card border border-0 py-3">
            <div class="card-body text-center">
              <h5 class="card-title">Pemasukan</h5>
              <p class="card-text keuangan-icon text-center">
                <span class="material-icons md-36">arrow_downward</span>
                <span>Rp <?= number_format($masuk) ?></span>
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
                <span>Rp <?= number_format($keluar) ?></span>
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
                <span>Rp 
                    <?php
                        $hasil = $masuk - $keluar;
                        echo number_format($hasil);
                    ?>
                </span>
              </p>
            </div>
          </div>
        </div>
    </div>

    <!-- konten -->
    <div class="content-keuangan bg-white p-3 p-sm-4 p-md-5 ">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h2 class="text-center text-sm-start"><b>Keuanganku</b></h2>
            <span class="text-center text-sm-start">Kelola keuangan anda dengan mudah.</span>
          </div>
          <div class="col-12 col-sm-6 d-flex">
            <button type="button" class="btn btn-success btn-transaksi mt-3 border border-0 mt-sm-0"
              data-bs-toggle="modal" data-bs-target="#exampleModal">
              <?= Html::a('Tambah Transaksi', ['create'], ['class' => 'btn btn-success']) ?>
            </button>
          </div>
        </div>
        <br>
        <div class="table-responsive table-keuangan">
          <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    [  
                        'header' => 'No',
                        'class' => 'yii\grid\SerialColumn'
                    ],

                    [
                        'attribute' => 'kategori.kategori',
                        'header' => 'Kategori'
                    ],

                    [
                        'attribute' => 'keterangan',
                        'header' => 'Keterangan'
                    ],

                    [
                        'attribute' => 'nominal',
                        'header' => 'Nominal'
                    ],

                    [
                        'attribute' => 'status',
                        'header' => 'Status',
                        
                        'value' => function($data){
                            if($data->status == 0){
                                return "Pemasukan";
                            }else{
                                return "Pengeluaran";
                            }
                        }
                    ],

                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Transaksi $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?>
        </div>
    </div> 

                
    <?php Pjax::end(); ?>

</div>
