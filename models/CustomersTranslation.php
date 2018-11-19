<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customersTranslation".
 *
 * @property int $id
 * @property int $customer_id
 * @property int $locale_id
 * @property string $image
 * @property string $title
 * @property string $body
 */
class CustomersTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customersTranslation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'locale_id'], 'integer'],
            [['title', 'body'], 'required'],
            [['body'], 'string'],
            [['image', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'locale_id' => 'Locale ID',
            'image' => 'Image',
            'title' => 'Title',
            'body' => 'Body',
        ];
    }
}
