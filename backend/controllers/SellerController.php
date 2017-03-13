<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/13
 * Time: 11:43
 */
namespace backend\controllers;

use yii\web\Controller;
use backend\models\SellersForm;
use backend\models\Seller;
use Yii;
use yii\web\UploadedFile;
use yii\data\Pagination;

class SellerController extends Controller{

    public function actionRegister(){

        $model=new SellersForm;
        $load=$model->load(Yii::$app->request->post());
        $add=new Seller;
        if($load){
            $model->image=UploadedFile::getInstance($model,'image');
            $add->s_name=$model->name;
            $add->s_phone=$model->phone;
            $add->s_number=$model->number;
            $add->s_password=$model->password;
            $add->s_image= '\\'.$model->image->baseName .'.'.$model->image->extension;
            $add->save();
            if ($add->save() && $model->upload()) {
                Yii::$app->getSession()->setFlash('success', '保存成功');
                return $this->redirect('index.php?r=seller/register');
            } else {
                Yii::$app->getSession()->setFlash('error', '保存失败');
            }
        }else{

            return $this->render('register',['model'=>$model]);
        }
    }

    public function actionShow(){

        $query= Seller::find();

        $pagination = new Pagination([
            'defaultPageSize' => 9,
            'totalCount' => $query->count(),
        ]);
        $result=$query->select(['s_id','s_phone','s_name','s_image','s_number'])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->asArray()
            ->all();

        return $this->render('show',['result'=>$result,'pagination'=>$pagination]);

    }
    public function actionDelete(){

        $request = \Yii::$app->request->get('d');
        $query=Seller::find()->where(['s_id'=>$request])->one();
        $query->delete();
        return $this->redirect('index.php?r=seller/show');
    }



}