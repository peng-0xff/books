<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/13
 * Time: 16:16
 */
use yii\widgets\LinkPager;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>所有卖家</title>

    <link href="<?php echo Yii::$app->request->baseUrl; ?>/css/mine.css" type="text/css" rel="stylesheet" />
</head>
<body>
<style>
    .tr_color{background-color: #9F88FF}
</style>
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：书本管理-》所有书本</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo Yii::$app->urlManager->createUrl('seller/register'); ?>">【添加用户】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px; margin: 10px 5px;">
    <table class="table_a" border="1" width="100%">
        <tbody><tr style="font-weight: bold;">
            <td>序号</td>
            <td>姓名</td>
            <td>联系方式</td>
            <td>学号</td>
            <td>头像</td>
            <td colspan="2" align="center">操作</td>
        </tr>
        <?php foreach($result as $v): ?>
            <tr id="product1">
                <td><?php echo $v['s_id']; ?></td>
                <td><a href="#"><?php echo $v['s_name']; ?></a></td>
                <td><?php echo $v['s_phone']; ?></td>
                <td><?php echo $v['s_number']; ?></td>
                <td><img src="<?php echo Yii::$app->params['IMAGE_URL']?><?php echo $v['s_image']; ?>" height="60" width="60"></td>
                <td><a href="<?php echo Yii::$app->urlManager->createUrl('books/modify');?>&&b_id=<?php echo $v['s_id'];?>">修改</a></td>
                <td><a href="<?php echo Yii::$app->urlManager->createUrl('seller/delete');?>&&d=<?php echo $v['s_id'];?>" onclick="delete_product(1)">删除</a></td>
            </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="20" style="text-align: center;">
                <?=LinkPager::widget(['pagination'=>$pagination]); ?>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>

