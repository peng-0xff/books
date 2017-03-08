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
    <title>添加书本</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/css/mine.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：仓库管理-》添加书本</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="/0901/food/index.php/Admin/Food/showfood">【返回】</a>
                </span>
            </span>
</div>
<div></div>
<div>&nbsp;&nbsp;&nbsp;添加书本图片：</div>

<div style="font-size: 13px;margin: 10px 5px">
<!--    <form action=" __SELF__ " method="post" enctype="multipart/form-data">-->
    <?php $form=ActiveForm::begin(['options'=>['enctype'=>"multipart/form-data"],'fieldConfig'=>[
        'template'=> "\n<div>{input}</div>\n{error}",
    ]]) ?>
        <table border="1" width="60%" class="table_a">
            <tr>
                <td>卖家</td>
                <td><?= $form->field($model,'seller') ?></td>
            </tr>
            <tr>
                <td>书本名称</td>
                <td><?= $form->field($model,'name') ?></td>
            </tr>
            <tr>
                <td>书本分类</td>

                <td><?= $form->field($model,'class') ?></td>

            </tr>
            <tr>
                <td>书本库存</td>
                <td>
                    <?= $form->field($model,'count') ?>
                </td>
            </tr>
            <tr>
                <td>书本价格</td>
                <td><?= $form->field($model,'price') ?></td>
            </tr>
                <?= $form->field($model,'image')->fileInput() ?>
            <tr>
                <td>备注</td>
                <td>
                    <?= $form->field($model,'describe')->textInput(['value'=>'jhdsgfjs']) ?>
                </td>
            </tr>

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
