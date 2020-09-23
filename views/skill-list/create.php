<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SkillList */

$this->title = 'Create Skill List';
$this->params['breadcrumbs'][] = ['label' => 'Skill Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skill-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
