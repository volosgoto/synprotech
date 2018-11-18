<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partners_translation".
 *
 * @property int $id
 * @property int $partner_id
 * @property int $locale_id
 * @property string $image
 * @property string $title
 * @property string $body
 */
class PartnersTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partners_translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['partner_id', 'locale_id'], 'integer'],
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
            'partner_id' => Yii::t('app', 'Partner ID'),
            'locale_id' => Yii::t('app', 'Locale ID'),
            'image' => Yii::t('app', 'Image'),
            'title' => Yii::t('app', 'Title'),
            'body' => Yii::t('app', 'Body'),
        ];
    }
}
