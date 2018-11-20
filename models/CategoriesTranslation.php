<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categoriesTranslation".
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
        return 'categoriesTranslation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'locale_id'], 'integer'],
            [['title', 'locale_id'], 'required'],
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
            'category_id' => 'Category ID',
            'locale_id' => 'Locale ID',
            'image' => 'Image',
            'title' => 'Title',
        ];
    }
}
