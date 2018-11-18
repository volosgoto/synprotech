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
            'id' => Yii::t('app', 'ID'),
            'сontact_id' => Yii::t('app', 'сontact ID'),
            'locale_id' => Yii::t('app', 'Locale ID'),
            'company_title' => Yii::t('app', 'Company Title'),
            'image' => Yii::t('app', 'Image'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'country' => Yii::t('app', 'Country'),
            'city' => Yii::t('app', 'City'),
            'region' => Yii::t('app', 'Region'),
            'zip' => Yii::t('app', 'Zip'),
            'adress' => Yii::t('app', 'Adress'),
        ];
    }
}
