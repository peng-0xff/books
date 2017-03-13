<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/13
 * Time: 10:53
 */
namespace backend\models;

use yii\base\Model;

class SellersForm extends Model{

    public $name;
    public $phone;
    public $image;
    public $number;
    public $password;
    public $confirmpw;  //验证密码是否正确

    public function rules(){

        return [
            [['name','phone','number','password'],'required','message'=>'不能为空'],
//            ['name','unique','targetClass'=>'\backend\models\Seller','message'=>'该用户名已被占用'],
            [['image'],'file','skipOnEmpty'=>true ,'extensions' => 'png,jpg'],
            ['confirmpw','compare','compareAttribute'=>'password','message'=>'密码输入不一致，请重新输入']
        ];
    }

    public function upload(){

        if($this->validate()){
            if($this->image){
                $name=iconv('UTF-8', 'gbk', $this->image->baseName);
                $this->image->saveAs(\Yii::$app->basePath .'/../image/seller/'.$name .'.'.$this->image->extension);
            }
            return true;
        }else{
            return false;
        }
    }


}