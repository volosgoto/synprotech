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
            'id' => 'ID',
            'year' => 'Year',
            'locale_id' => 'Locale ID',
            'customer_id' => 'Customer ID',
            'project_image' => 'Project Image',
            'project_title' => 'Project Title',
            'customer_image' => 'Customer Image',
            'customer_title' => 'Customer Title',
            'project_body' => 'Project Body',
            'customer_body' => 'Customer Body',
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
