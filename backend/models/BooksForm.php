<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/7
 * Time: 15:43
 */
namespace backend\models;

use yii\base\Model;
use yii\web\UploadedFile;

class BooksForm extends Model{

     public $seller;
     public $name;
     public $class;
     public $price;
     public $count;
     public $image;
     public $describe;

     public function rules()
     {
        return [
            [['seller','name','class','price','count'],'required','message'=>'不能为空'],
            [['price','count'],'integer','message'=>'只能为数字'],
            ['describe','default','value'=>$this->describe],
            [['image'],'file','skipOnEmpty'=>false ,'extensions' => 'png,jpg'],
        ];
     }

     public function upload(){

         if($this->validate()){
             if($this->image){
                 $name=iconv('UTF-8', 'gbk', $this->image->baseName);
                 $this->image->saveAs(\Yii::$app->basePath .'/../image/'.$name .'.'.$this->image->extension);
             }
             return true;
         }else{
             return false;
         }
     }

}