<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 21.11.18
 * Time: 14:24
 */

namespace app\models;


namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Yii;

class ImageUpload extends Model {

    public $image;

    public function rules(){
        return[
            [['image'], 'file', 'extensions' => 'png, jpg, jpeg'],
        ];
    }


    public function upload(UploadedFile $file)
    {

        if ($this->validate()) {
            $file->saveAs(Yii::getAlias('@app' ) . '/web/images/uploads/' . $file->baseName . '.' . $file->extension);
            return true;
        } else {
            return false;
        }
    }
}