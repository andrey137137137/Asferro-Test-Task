<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Job */
/* @var $form yii\widgets\ActiveForm */

$datePickerParams = [
  'type' => DatePicker::TYPE_INPUT,
  'convertFormat' => true,
  'pluginOptions' => [
    'autoclose' => true,
    'format' => 'yyyy-MM-dd'
  ]
];
?>

<div class="job-form">

  <?php $form = ActiveForm::begin(); ?>

  <?= $form->field($model, 'profession')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'employment_date')->widget(DatePicker::classname(), $datePickerParams); ?>

  <?= $form->field($model, 'dismissal_date')->widget(DatePicker::classname(), $datePickerParams); ?>

  <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

  <div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
  </div>

  <?php ActiveForm::end(); ?>

</div>