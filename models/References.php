<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "references".
 *
 * @property int $id
 * @property int $publish_status
 */
class References extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'references';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['publish_status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'publish_status' => 'Publish Status',
        ];
    }
}
