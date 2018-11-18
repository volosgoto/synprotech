<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "referencesTranslation".
 *
 * @property int $id
 * @property string $year
 * @property int $locale_id
 * @property int $customer_id
 * @property string $project_image
 * @property string $project_title
 * @property string $customer_image
 * @property string $customer_title
 * @property string $project_body
 * @property string $customer_body
 */
class ReferencesTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'referencesTranslation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year', 'project_title', 'customer_title', 'project_body'], 'required'],
            [['locale_id', 'customer_id'], 'integer'],
            [['project_body', 'customer_body'], 'string'],
            [['year', 'project_image', 'project_title', 'customer_image', 'customer_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'year' => Yii::t('app', 'Year'),
            'locale_id' => Yii::t('app', 'Locale ID'),
            'customer_id' => Yii::t('app', 'Customer ID'),
            'project_image' => Yii::t('app', 'Project Image'),
            'project_title' => Yii::t('app', 'Project Title'),
            'customer_image' => Yii::t('app', 'Customer Image'),
            'customer_title' => Yii::t('app', 'Customer Title'),
            'project_body' => Yii::t('app', 'Project Body'),
            'customer_body' => Yii::t('app', 'Customer Body'),
        ];
    }
}
