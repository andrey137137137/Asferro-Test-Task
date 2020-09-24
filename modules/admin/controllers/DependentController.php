<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\helpers\ArrayHelper;

/**
 * DependentController implements the CRUD actions for Description model.
 */
class DependentController extends Controller
{
  protected $defaultListValue = [];

  protected function getArray($list, $label, $value, $default = [])
  {
    $array = $default;

    foreach (ArrayHelper::map($list, $value, $label) as $key => $val) {
      $array[$key] = $val;
    }

    return $array;
  }

  protected function getListQuery()
  {
    return [];
  }

  protected function getDropDownList($label, $value)
  {
    return $this->getArray($this->getListQuery(), $label, $value, $this->defaultListValue);
  }
}
