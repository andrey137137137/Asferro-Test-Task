<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\widgets\Alert;
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
      'brandUrl' => '/../../',
      'options' => [
        'class' => 'navbar-inverse',
      ],
    ]);
    echo Nav::widget([
      'options' => ['class' => 'navbar-nav'],
      'items' => [
        ['label' => 'Профили', 'url' => [$urlRoot . '/profile/index']],
        [
          'label' => 'Список навыков',
          'items' => [
            ['label' => 'Категории', 'url' => [$urlRoot . '/category/index']],
            ['label' => 'Навыки', 'url' => [$urlRoot . '/skill/index']],
          ],
        ],
        [
          'label' => 'Опыт работы',
          'items' => [
            ['label' => 'Компании', 'url' => [$urlRoot . '/job/index']],
            ['label' => 'Опыт в компаниях', 'url' => [$urlRoot . '/description/index']],
          ],
        ],
        ['label' => 'Образование', 'url' => [$urlRoot . '/education/index']],
        ['label' => 'Контакты', 'url' => [$urlRoot . '/contact/index']],
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