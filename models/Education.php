<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property int $id
 * @property string $profession
 * @property string $university
 * @property string $admission_date
 * @property string $graduation_date
 * @property string $country
 */
class Education extends \yii\db\ActiveRecord
{
  /**
   * {@inheritdoc}
   */
  public static function tableName()
  {
    return 'education';
  }

  /**
   * {@inheritdoc}
   */
  public function rules()
  {
    return [
      [['profession', 'university', 'admission_date', 'graduation_date', 'country'], 'required'],
      [['admission_date', 'graduation_date'], 'safe'],
      [['profession'], 'string', 'max' => 50],
      [['university'], 'string', 'max' => 100],
      [['country'], 'string', 'max' => 150],
    ];
  }

  public function beforeSave($insert)
  {
    if (!parent::beforeSave($insert)) {
      return false;
    }

    Yii::$app->formatter->asDate($this->admission_date, 'php:Y-m-d');
    Yii::$app->formatter->asDate($this->graduation_date, 'php:Y-m-d');

    return true;
  }

  public function getAdmissionDateStr()
  {
    // return date('d.m.Y', $this->admission_date);
    return Yii::$app->formatter->asDate($this->admission_date);
  }

  public function getGraduationDateStr()
  {
    // return date('d.m.Y', $this->graduation_date);
    return Yii::$app->formatter->asDate($this->graduation_date);
  }

  /**
   * {@inheritdoc}
   */
  public function attributeLabels()
  {
    return [
      'id' => 'ID',
      'profession' => 'Profession',
      'university' => 'University',
      'admission_date' => 'Admission Date',
      'graduation_date' => 'Graduation Date',
      'country' => 'Country',
    ];
  }
}
