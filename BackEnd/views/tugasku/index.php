`<?php

  use app\models\Tugasku;
  use yii\helpers\Html;
  use yii\helpers\Url;
  use yii\grid\ActionColumn;
  use yii\grid\GridView;
  use yii\widgets\LinkPager;
  use yii\widgets\Pjax;

  /** @var yii\web\View $this */
  /** @var app\models\TugaskuSearch $searchModel */
  /** @var yii\data\ActiveDataProvider $dataProvider */

  $this->title = 'Tugaskus';
  $this->params['breadcrumbs'][] = $this->title;
  ?>
<div class="tugasku-index">

  <?php Pjax::begin(); ?>
  <?php // echo $this->render('_search', ['model' => $searchModel]); 
  ?>

  <div class="tugas-title bg-white p-4 row align-items-center round-4 mb-4">
    <div class=" col-12 col-sm-7 text-center text-sm-start">
      <h2>Tugasku</h2>
      Organisasikan tugas-tugas sekolah dengan mudah dan efisien.
    </div>
    <div class="col-12 col-sm-5">
      <button type=" button" class="btn btn-success btn-transaksi mt-3 border border-0 mt-sm-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <span class="material-icons md-36">add</span> <?= Html::a('Tambah Kegiatan', ['create'], ['class' => 'btn btn-success btn-transaksi mt-3 border border-0 mt-sm-0']) ?>
      </button>
    </div>
  </div>

  <!-- tugas belum selesai -->
  <div class="tugas-group bg-white p-4 row align-items-center round-4 mb-4">
    <div class="tugas-title">
      <div class=" col-12 col-sm-7 text-center text-sm-start">
        <h4>Tugas belum dikerjakan</h4>
      </div>

      <?php
      foreach ($dataProvider->models as $data) {
        if ($data['status'] == 0) {
      ?>
          <div class="tugas-item bg-white p-4 row align-items-center round-4 mb-4 border border-warning">
            <div class=" col-12 col-sm-7">
              <h4 class="text-center text-sm-start"><?= $data->mapel; ?></h4>
              <h6 class="text-center text-sm-start"><?= $data->tanggal; ?></h6>
            </div>
            <div class="col-12 col-sm-5 tugas-item-action mt-3 m-sm-0">
              <?=
              Html::a('check_circle', ['selesai', 'id' => $data->id], ['class' => 'btn btn-success material-icons md-36 me-1'])
              ?>
              <?=
              Html::a('edit', ['update', 'id' => $data->id], ['class' => 'btn btn-secondary material-icons md-36 me-1'])
              ?>
              <?=
              Html::a('delete', ['delete', 'id' => $data->id], ['class' => 'btn btn-danger material-icons md-36 me-1'])
              ?>
            </div>
            <hr class="mt-2">
            <p>
              <?= $data->keterangan ?>
            </p>
          </div>

      <?php
          }
        }
      ?>
    </div>
  </div>


  <!-- tugas sudah selesai -->
  <div class="tugas-group bg-white p-4 row align-items-center round-4 mb-4">
    <div class="tugas-title">
      <div class=" col-12 col-sm-7 text-center text-sm-start">
        <h4>Tugas selesai dikerjakan</h4>
      </div>

      <?php
      foreach ($dataProvider->models as $data) {
        if ($data['status'] == 1) {
      ?>
          <div class="tugas-item bg-white p-4 row align-items-center round-4 mb-4 border border-success">
            <div class=" col-12 col-sm-7">
              <h4 class="text-center text-sm-start"><?= $data['mapel']; ?></h4>
              <h6 class="text-center text-sm-start"><?= $data['tanggal']; ?></h6>
            </div>
            <div class="col-12 col-sm-5 tugas-item-action mt-3 m-sm-0">
              <?=
              Html::a('replay', ['belum', 'id' => $data->id], ['class' => 'btn btn-warning material-icons md-36 me-1'])
              ?>
              <?=
              Html::a('edit', ['update', 'id' => $data->id], ['class' => 'btn btn-secondary material-icons md-36 material-icons md-36 me-1'])
              ?>
              <?=
              Html::a('delete', ['delete', 'id' => $data->id], ['class' => 'btn btn-danger material-icons md-36 material-icons md-36 me-1'])
              ?>
            </div>
            <hr class="mt-2">
            <p>
              <?= $data['keterangan'] ?>
            </p>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </div>
</div>