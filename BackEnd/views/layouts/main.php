<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>

<body>
  <?php $this->beginBody() ?>

  <!-- top bar -->
  <nav>
    <a href="" class="menu-humberger">
      <span class="material-icons md-36">menu</span>
    </a>
  </nav>
  <!-- akhir top bar -->

  <!-- sidebar -->
  <div class="sidebar">
    <div class="sidebar-logo">
      <img src="/template/img/icons/logo.svg" alt="" />
    </div>
    <span class="mt-4 mb-1 d-block sidebar-none">Menu</span>
    <ul class="sidebar-menu ">
      <li>
        <a href="<?= Url::to(['/dashboard']) ?>" class="menu-item <?= (Yii::$app->controller->id == 'site' ? 'menu-active' : '') ?> ">
          <span class="material-icons md-36">grid_view</span>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="<?= Url::to(['/transaksi']) ?>" class="menu-item <?= (Yii::$app->controller->id == 'transaksi' ? 'menu-active' : '') ?>">
          <span class="material-icons md-36">monetization_on</span>Dompetku</span>
        </a>
      </li>
      <li>
        <a href="<?= Url::to(['/kegiatanku']) ?>" class="menu-item <?= (Yii::$app->controller->id == 'kegiatanku' ? 'menu-active' : '') ?>">
          <span class="material-icons md-36">book</span>
          <span>Kegiatanku</span>
        </a>
      </li>
      <li>
        <a href="<?= Url::to(['/tugasku']) ?>" class="menu-item <?= (Yii::$app->controller->id == 'tugasku' ? 'menu-active' : '') ?>">
          <span class="material-icons md-36">feed</span>
          <span>Tugasku</span>
        </a>
      </li>
    </ul>
    <hr>
    <span class="mt-3 d-block">Profile</span>
    <div class="sidebar-profile">
      <div class="row">
        <div class="col-3">
          <img src="/template/img/profile.png" alt="">
        </div>
        <div class="col-8">
          <span>
            <?=
            Yii::$app->user->identity->username;
            ?>
          </span>
          <span>
            <?=
            Yii::$app->user->identity->email;
            ?>
          </span>
        </div>
      </div>
    </div>

    <!-- logout -->
    <?=
    Html::beginForm(['/site/logout'], 'post') .
      Html::submitButton(
        '
          <span class="material-icons md-36">logout</span>
          <i class="las la-power-off"></i> Logout
        ',

        ['class' => 'btn btn-logout logout']
      ) .
      Html::endForm()
    ?>

  </div>
  <!-- akhir sidebar -->

  <!-- content -->
  <div class="container">
    <div class="content welcome d-flex flex-column justify-content-center align-items-center">
      <?= $content ?>
    </div>
  </div>

  <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>