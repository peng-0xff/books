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

class BooksController extends Controller{

    public function actionAdd(){

        return $this->render('add');
    }
}