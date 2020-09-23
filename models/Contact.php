<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $name
 * @property string $value
 * @property string $pre_link
 * @property string $item_prefix
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
            [['name', 'value', 'pre_link', 'item_prefix'], 'required'],
            [['name'], 'string', 'max' => 30],
            [['value'], 'string', 'max' => 50],
            [['pre_link'], 'string', 'max' => 20],
            [['item_prefix'], 'string', 'max' => 3],
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
            'value' => 'Value',
            'pre_link' => 'Pre Link',
            'item_prefix' => 'Item Prefix',
        ];
    }
}
