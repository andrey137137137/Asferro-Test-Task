<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jobs".
 *
 * @property int $id
 * @property string $profession
 * @property string $company
 * @property string $employment_date
 * @property string|null $dismissal_date
 * @property string $country
 *
 * @property Description[] $descriptions
 */
class Job extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jobs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['profession', 'company', 'employment_date', 'country'], 'required'],
            [['employment_date', 'dismissal_date'], 'safe'],
            [['profession'], 'string', 'max' => 50],
            [['company'], 'string', 'max' => 100],
            [['country'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'profession' => 'Profession',
            'company' => 'Company',
            'employment_date' => 'Employment Date',
            'dismissal_date' => 'Dismissal Date',
            'country' => 'Country',
        ];
    }

    /**
     * Gets query for [[Descriptions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDescriptions()
    {
        return $this->hasMany(Description::className(), ['job_id' => 'id']);
    }
}
