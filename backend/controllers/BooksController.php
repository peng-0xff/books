<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/7
 * Time: 15:31
 */
namespace backend\controllers;

use yii\web\Controller;
use Yii;
use backend\models\BooksForm;
use backend\models\Book;
use yii\web\UploadedFile;

class BooksController extends Controller{

    public function actionAdd(){

        $model=new Booksform;
        $load=$model->load(Yii::$app->request->post());
        $add=new Book;
        if($load){
            $model->image=UploadedFile::getInstance($model,'image');
            $add->b_seller=$model->seller;
            $add->b_name=$model->name;
            $add->b_class=$model->class;
            $add->b_count=$model->count;
            $add->b_price=$model->price;
            $add->b_describe=$model->describe;
            $add->b_image= Yii::$app->basePath .'/../image/'.$model->image->baseName .'.'.$model->image->extension;
            $add->save();
            if ($add->save()) {
                Yii::$app->getSession()->setFlash('success', '保存成功');
                return $this->redirect('index.php?r=books/add');
            } else {
                Yii::$app->getSession()->setFlash('error', '保存失败');
            }
        }else{

              return $this->render('add',['model'=> $model]);
        }
    }


    public function actionShow(){


        return $this->render('show');
    }
      //修改书本
    public function actionModify(){

        $result=Book::find()

        ;


        return $this->render('modify');

    }

}