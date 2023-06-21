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
    'fieldConfig' => [
        'template' => "{label}\n{input}\n{error}",
        'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
        'inputOptions' => ['class' => 'col-lg-3 form-control'],
        'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
    ],
]); ?>
<div class="welcome d-flex flex-column justify-content-center align-items-center">
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
            <div class="featured-image mb-3" data-tilt>
                <img src="/template/img/catatanbocah.png" class="img-fluid" style="width: 400px;">
            </div>
        </div>
        <div class="col-md-6 right-box">
            <form action="dashboard.html">
                <div class="row align-items-center">
                    <div class="header-text mb-4 text-lg-center">
                        <h3 class="fw-bold">Masuk</h3>
                        <div class="line bg-black"></div>
                    </div>
                    <div class="input-group mb-3 d-block">
                        <div class="mb-3 fw-bold">
                            <?= $form->field($model, 'username')->textInput([
                                'autofocus' => true,
                                'placeholder' => 'Masukkan NISN'
                            ]) ?>
                        </div>
                        <div class="mb-3 fw-bold">
                            <!-- <label>Password</label> -->
                            <?= $form->field($model, 'password')->passwordInput([
                                'id' => 'password-field',
                                'class' => 'form-control form-control-lg bg-light fs-6 ',
                                'placeholder' => 'Masukkan password'
                            ]) ?>
                        </div>
                    </div>
                    <div class="mb-5 d-flex justify-content-between">
                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        ]) ?>
                        <!-- <div class="forgot">
                            <p><a href="#" class="text-success fw-bold">Lupa Password?</a></p>
                        </div> -->
                    </div>
                </div>
                <div class="input-group mb-3">
                    <?= Html::submitButton('Masuk', ['class' => 'btn btn-lg btn-success w-100 fs-6', 'name' => 'login-button']) ?>
                    <!-- <button class="btn btn-lg btn-success w-100 fs-6">Masuk</button> -->
                </div>
                <div class="row text-lg-center">
                    <p>Belum punya akun?
                        <a href="<?= Url::to(['/site/register']) ?>" class="text-success fw-bold <?= (Yii::$app->controller->id == 'register' ? 'menu-active' : '') ?>"> Daftar
                            <!-- <a href="register.html" class="text-success fw-bold">Daftar</a> -->
                    </p>
                </div>
        </div>
        </form>
    </div>
</div>
    <?php ActiveForm::end(); ?>