<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about_translation".
 *
 * @property int $id
 * @property int $about_id
 * @property int $locale_id
 * @property string $image
 * @property string $title
 * @property string $branding
 * @property string $showcase_text
 * @property string $body_text
 */
class AboutTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['about_id', 'locale_id'], 'integer'],
            [['title', 'branding'], 'required'],
            [['showcase_text', 'body_text'], 'string'],
            [['image', 'title', 'branding'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'about_id' => Yii::t('app', 'About ID'),
            'locale_id' => Yii::t('app', 'Locale ID'),
            'image' => Yii::t('app', 'Image'),
            'title' => Yii::t('app', 'Title'),
            'branding' => Yii::t('app', 'Branding'),
            'showcase_text' => Yii::t('app', 'Showcase Text'),
            'body_text' => Yii::t('app', 'Body Text'),
        ];
    }
}
