<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Experiences';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="experience-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Experience', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'profession',
            'company',
            'description_1',
            'description_2',
            //'description_3',
            //'description_4',
            //'employment_date',
            //'dismissal_date',
            //'country',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
