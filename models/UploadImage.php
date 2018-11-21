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

class UploadImage extends Model {
    public $image;

    public function rules(){
        return[
            [['image'], 'file', 'extensions' => 'png, jpg, jpeg'],
        ];
    }

//    public function upload(){
//        if($this->validate()){
//            $this->image->saveAs("uploads/{$this->image->baseName}.{$this->image->extension}");
//        }else{
//            return false;
//        }
//    }


    public function upload()
    {
        if ($this->validate()) {
            $this->image->saveAs(Yii::getAlias('@app' ) . '/web/images/uploads/' . $this->image->baseName . '.' . $this->image->extension);
            return true;
        } else {
            return false;
        }
    }
}