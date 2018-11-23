<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contactsTranslation".
 *
 * @property int $id
 * @property int $сontact_id
 * @property int $locale_id
 * @property string $company_title
 * @property string $image
 * @property string $phone
 * @property string $email
 * @property string $country
 * @property string $city
 * @property string $region
 * @property int $zip
 * @property string $adress
 */
class ContactsTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contactsTranslation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['сontact_id', 'locale_id', 'zip'], 'integer'],
            [['company_title', 'phone', 'email'], 'required'],
            [['company_title', 'image', 'phone', 'email', 'country', 'city', 'region', 'adress'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'сontact_id' => 'сontact ID',
            'locale_id' => 'Locale ID',
            'company_title' => 'Company Title',
            'image' => 'Image',
            'phone' => 'Phone',
            'email' => 'Email',
            'country' => 'Country',
            'city' => 'City',
            'region' => 'Region',
            'zip' => 'Zip',
            'adress' => 'Adress',
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
