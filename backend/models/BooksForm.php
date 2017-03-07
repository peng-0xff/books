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

     public $id;
     public $seller;
     public $name;
     public $class;
     public $price;
     public $image;
     public $describe;

     public function rules()
     {
        return [

        ];
     }

}