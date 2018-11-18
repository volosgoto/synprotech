<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services_translation".
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
        return 'services_translation';
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
            'id' => Yii::t('app', 'ID'),
            'service_id' => Yii::t('app', 'Service ID'),
            'locale_id' => Yii::t('app', 'Locale ID'),
            'image' => Yii::t('app', 'Image'),
            'title' => Yii::t('app', 'Title'),
            'body' => Yii::t('app', 'Body'),
        ];
    }
}
