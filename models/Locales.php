<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "locales".
 *
 * @property int $id
 * @property string $name
 * @property string $code
 */
class Locales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'locales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 50],
            [['code'], 'string', 'max' => 5],
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
            'code' => 'Code',
        ];
    }
}
