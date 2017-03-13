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
use yii\data\Pagination;

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
            $add->b_image= '\\'.$model->image->baseName .'.'.$model->image->extension;
            $add->save();
            if ($add->save() && $model->upload()) {
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

        $query= Book::find();

        $pagination = new Pagination([
            'defaultPageSize' => 9,
            'totalCount' => $query->count(),
        ]);
        $result=$query->select(['b_id','b_seller','b_count','b_name','b_class','b_price','b_image','b_describe'])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->asArray()
            ->all();


        return $this->render('show',['result'=>$result,'pagination'=>$pagination]);
    }
      //修改书本
    public function actionModify(){


        $result=Book::find();
        $id=Yii::$app->request->get('b_id');
        $query1=$result->where(['b_id'=>$id])
            ->asArray()
            ->one();
        $query=Book::findOne(['b_id'=>$id]);

        $model=new Booksform;
        $load=$model->load(Yii::$app->request->post());
        if($load){
            $model->image=UploadedFile::getInstance($model,'image');
            $query->b_seller=$model->seller;
            $query->b_name=$model->name;
            $query->b_class=$model->class;
            $query->b_count=$model->count;
            $query->b_price=$model->price;
            $query->b_describe=$model->describe;
            $query->b_image= '\\'.$model->image->baseName .'.'.$model->image->extension;
            $query->save();
            if ($query->save() && $model->upload()) {
                Yii::$app->getSession()->setFlash('success', '保存成功');
                return $this->redirect('index.php?r=books/show');
            } else {
                Yii::$app->getSession()->setFlash('error', '保存失败');
            }
        }else{

            return $this->render('modify',['query'=>$query1,'model'=>$model]);
        }
    }

    public function actionDelete(){

        $request = \Yii::$app->request->get('d');
        $query=Book::find()->where(['b_id'=>$request])->one();
        $query->delete();
        return $this->redirect('index.php?r=books/show');
    }

}