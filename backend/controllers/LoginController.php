<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/5
 * Time: 19:39
 */

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use backend\models\LoginForm;

class LoginController extends Controller
{

//    public $layout="new";
    public function actions(){

        return [
            'captcha' => [

                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
           return $this->redirect('index.php?r=main/index');

        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {

           return $this->redirect('index.php?r=main/index');
        }
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return  $this->redirect('index.php?r=login/login');  //
    }
}