<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partnersTranslation".
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
        return 'partnersTranslation';
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
            'id' => 'ID',
            'partner_id' => 'Partner ID',
            'locale_id' => 'Locale ID',
            'image' => 'Image',
            'title' => 'Title',
            'body' => 'Body',
        ];
    }

    public function saveImage($file){ // Object
        $prefix = Yii::$app->security->generateRandomString(4); // Prefix to exclude rewrite file

        if ($file->error == 0) {
            $this->image = $prefix . $file->name;
            $this->save();
        }
        return false;
    }
}
