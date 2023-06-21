<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php $form = ActiveForm::begin([
    'id' => 'login-form',
]); ?>

<!-- form login lama -->
<!-- <?= $form->field($model, 'email')->textInput(['type' => 'email', 'autofocus' => true]) ?>

<?= $form->field($model, 'nomor_hp')->textInput() ?>

<?= $form->field($model, 'username')->textInput() ?>

<?= $form->field($model, 'password')->passwordInput() ?>

<div class="form-group mt-4">
    <div class="row">
        <div class="col d-flex align-items-center">
            <?= Html::submitButton('Daftar', ['class' => 'btn btn-dark w-100 py-2', 'name' => 'login-button']) ?>
        </div>
        <div class="col d-flex align-items-center text-center">
            <?= Html::a('Sudah punya akun?', ['login'], ['class' => 'w-100 text-indigo']) ?>
        </div>
    </div>
</div> -->

<div class="welcome d-flex flex-column justify-content-center align-items-center">
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
            <div class="featured-image mb-3" data-tilt>
                <img src="/template/img/catatanbocah.png" class="img-fluid" style="width: 400px;">
            </div>
        </div>
        <div class="col-md-6 right-box">
            <form class="" action="dashboard.html">
                <div class="row align-items-center">
                    <div class="header-text mb-4 text-lg-center">
                        <h3 class="fw-bold">Daftar</h3>
                        <div class="line bg-black"></div>
                    </div>
                    <div class="input-group mb-3 d-block">
                        <div class="mb-3 fw-bold">
                            <?=
                            $form->field($model, 'email')->textInput([
                                'type' => 'email',
                                'autofocus' => true,
                                'class' => 'form-control form-control-lg bg-light fs-6',
                                'placeholder' => 'Masukkan email'
                            ]) ?>
                        </div>

                        <div class="mb-3 fw-bold">
                            <?= $form->field($model, 'nomor_hp')->textInput([
                                'class' => 'form-control form-control-lg bg-light fs-6',
                                'placeholder' => 'Masukkan nomor handphone'
                            ]) ?>
                        </div>

                        <div class="mb-3 fw-bold">
                            <?= $form->field($model, 'username')->textInput([
                                'class' => 'form-control form-control-lg bg-light fs-6',
                                'placeholder' => 'Masukkan username'
                            ]) ?>
                        </div>

                        <div class="mb-3 fw-bold">
                            <?= $form->field($model, 'password')->passwordInput([
                                'class' => 'form-control form-control-lg bg-light fs-6',
                                'placeholder' => 'Masukkan password'
                            ]) ?>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <?= Html::submitButton('Daftar', [
                            'class' => 'btn btn-lg btn-success w-100 fs-6',
                            'name' => 'login-button'
                        ]) ?>
                    </div>
                    <div class="row text-lg-center">
                        <p>Sudah punya akun?
                            <?= Html::a('Masuk', ['login'], ['class' => 'text-success fw-bold']) ?>
                            <!-- <a href="login.html" class="text-success fw-bold">Masuk</a> -->
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    <?php ActiveForm::end(); ?>