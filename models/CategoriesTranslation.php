<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categories_translation".
 *
 * @property int $id
 * @property int $category_id
 * @property int $locale_id
 * @property string $image
 * @property string $title
 */
class CategoriesTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories_translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'locale_id'], 'integer'],
            [['title'], 'required'],
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
            'category_id' => Yii::t('app', 'Category ID'),
            'locale_id' => Yii::t('app', 'Locale ID'),
            'image' => Yii::t('app', 'Image'),
            'title' => Yii::t('app', 'Title'),
        ];
    }
}
