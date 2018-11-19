<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aboutTranslation".
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
        return 'aboutTranslation';
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
            'id' => 'ID',
            'about_id' => 'About ID',
            'locale_id' => 'Locale ID',
            'image' => 'Image',
            'title' => 'Title',
            'branding' => 'Branding',
            'showcase_text' => 'Showcase Text',
            'body_text' => 'Body Text',
        ];
    }
}
