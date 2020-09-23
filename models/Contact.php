<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $value
 * @property string $link
 * @property string $marker
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value', 'link', 'marker'], 'required'],
            [['value'], 'string', 'max' => 30],
            [['link'], 'string', 'max' => 50],
            [['marker'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
            'link' => 'Link',
            'marker' => 'Marker',
        ];
    }
}
