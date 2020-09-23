<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Experience */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="experience-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'profession')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employment_date')->textInput() ?>

    <?= $form->field($model, 'dismissal_date')->textInput() ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
