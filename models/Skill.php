<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "skills".
 *
 * @property int $id
 * @property string $name
 * @property int $percents
 *
 * @property SkillList[] $skillLists
 */
class Skill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skills';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['percents'], 'integer'],
            [['name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'percents' => 'Percents',
        ];
    }

    /**
     * Gets query for [[SkillList]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkillLists()
    {
        return $this->hasMany(SkillList::className(), ['skill_id' => 'id']);
    }
}
