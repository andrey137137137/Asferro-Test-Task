<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\widgets\Alert;
use yii\helpers\Url;
use app\assets\AppAsset;

$urlRoot = '/admin';

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?> | Панель управления</title>
  <?php $this->head() ?>
</head>

<body>
  <?php $this->beginBody() ?>

  <header>
    <?php
    NavBar::begin([
      'brandLabel' => 'Сайт',
      // 'brandUrl' => Yii::$app->homeUrl,
      'brandUrl' => '/../../',
      'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
      ],
    ]);
    echo Nav::widget([
      'options' => ['class' => 'navbar-nav'],
      'items' => [
        [
          'label' => 'Список навыков',
          'items' => [
            ['label' => 'Категории', 'url' => [$urlRoot . '/category/index']],
            ['label' => 'Навыки', 'url' => [$urlRoot . '/skill/index']],
          ],
        ],
      ],
    ]);
    echo Nav::widget([
      'options' => ['class' => 'navbar-nav navbar-right'],
      'items' => [
        ['label' => 'Выйти', 'url' => [$urlRoot . '/auth/logout']],
      ],
    ]);
    NavBar::end();
    ?>
  </header>

  <div class="container">
    <?= Breadcrumbs::widget([
      // 'homeLink' => ['label' => 'Главная', 'link' => '/admin'],
      'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
  </div>

  <footer class="footer">
    <div class="container">
      <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

      <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
  </footer>

  <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>