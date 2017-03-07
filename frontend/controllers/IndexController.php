<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/5
 * Time: 14:59
 */
namespace frontend\controllers;

use yii\web\Controller;

class IndexController extends Controller{

    public function actionIndex(){

       echo $this->render('index');
    }

}