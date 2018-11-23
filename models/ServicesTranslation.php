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

//            TODO ADD ID primary key
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

    public function saveImage($file){ // Object
        $prefix = Yii::$app->security->generateRandomString(4); // Prefix to exclude rewrite file

        if ($file->error == 0) {
            $this->image = $prefix . $file->name;
            $this->save();
        }
        return false;
    }
}
