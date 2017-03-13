<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/13
 * Time: 11:50
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/7
 * Time: 15:38
 */
use yii\widgets\ActiveForm;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>添加卖家</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/css/mine.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：卖家管理-》添加卖家</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo Yii::$app->urlManager->createUrl('seller/show'); ?>">【返回】</a>
                </span>
            </span>
</div>
<div></div>
<div>&nbsp;&nbsp;&nbsp;添加用户头像：</div>

<div style="font-size: 13px;margin: 10px 5px">
    <!--    <form action=" __SELF__ " method="post" enctype="multipart/form-data">-->
    <?php $form=ActiveForm::begin(['options'=>['enctype'=>"multipart/form-data"],'fieldConfig'=>[
        'template'=> "\n<div>{input}</div>\n{error}",
    ]]) ?>
    <table border="1" width="60%" class="table_a">
        <tr>
            <td>姓名</td>
            <td><?= $form->field($model,'name') ?></td>
        </tr>
        <tr>
            <td>联系方式</td>
            <td><?= $form->field($model,'phone') ?></td>
        </tr>
        <tr>
            <td>学号</td>

            <td><?= $form->field($model,'number') ?></td>

        </tr>
        <tr>
            <td>密码</td>
            <td>
                <?= $form->field($model,'password')->passwordInput(['maxlength' => 20]) ?>
            </td>
        </tr>
        <tr>
            <td>确认密码</td>
            <td><?= $form->field($model,'confirmpw')->passwordInput(['maxlength' => 20]) ?></td>
        </tr>
        <?= $form->field($model,'image')->fileInput() ?>

        <tr>
            <td colspan="2" align="center">
                <button>添加</button>
            </td>
        </tr>
        <?php ActiveForm::end() ?>
    </table>
    </form>
</div>
</body>
</html>

