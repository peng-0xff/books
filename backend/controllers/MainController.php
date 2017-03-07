<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/7
 * Time: 10:03
 */
namespace backend\controllers;

use yii\web\Controller;

class MainController extends Controller{

    public function actionIndex(){

        return $this->renderPartial('index');
    }

    public function actionHead(){

        return $this->renderPartial('head');
    }
    public function actionLeft(){

        return $this->renderPartial('left');
    }

    public function actionRight(){

        return $this->renderPartial('right');
    }

    public function actionAbout(){

        return $this->renderPartial('about');
    }
}