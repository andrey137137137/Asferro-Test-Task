<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "experience".
 *
 * @property int $id
 * @property string $profession
 * @property string $company
 * @property string|null $description_1
 * @property string|null $description_2
 * @property string|null $description_3
 * @property string|null $description_4
 * @property string $employment_date
 * @property string|null $dismissal_date
 * @property string $country
 */
class Experience extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'experience';
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
            [['description_1', 'description_2', 'description_3', 'description_4'], 'string', 'max' => 200],
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
            'description_1' => 'Description 1',
            'description_2' => 'Description 2',
            'description_3' => 'Description 3',
            'description_4' => 'Description 4',
            'employment_date' => 'Employment Date',
            'dismissal_date' => 'Dismissal Date',
            'country' => 'Country',
        ];
    }
}
