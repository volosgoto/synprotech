<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicesTranslation".
 *
 * @property int $id
 * @property int $service_id
 * @property int $locale_id
 * @property string $image
 * @property string $title
 * @property string $body
 */
class ServicesTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicesTranslation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'service_id', 'locale_id'], 'integer'],
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
            'service_id' => 'Service ID',
            'locale_id' => 'Locale ID',
            'image' => 'Image',
            'title' => 'Title',
            'body' => 'Body',
        ];
    }
}
