<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/8
 * Time: 14:56
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>修改书本</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/css/mine.css " type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：书本修改-》修改书本信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="">【返回】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px;margin: 10px 5px">
    <form action="__SELF__" method="post" enctype="multipart/form-data">
        <input type="hidden" name="food_id" value="<?php echo $info[food_id]; ?>" />
        <table border="1" width="100%" class="table_a">
            <tr>
                <td>商家</td>
                <td><input type="text" name="shop_name" value="<?php echo $info[shop_name]; ?>" /></td>
            </tr>
            <tr>
                <td>食物名称</td>
                <td><input type="text" name="food_name" value="<?php echo $info[food_name]; ?>" /></td>
            </tr>
            <tr>
                <td>食物分类</td>

                <td><input type="text" name="food_fenlei" value="<?php echo $info[food_fenlei]; ?>"/></td>

            </tr>
            <tr>
                <td>实物库存</td>
                <td>
                    <input type="text" name="food_number" value="<?php echo $info[food_number]; ?>" />
                </td>
            </tr>
            <tr>
                <td>食物价格</td>
                <td><input type="text" name="food_price" value="<?php echo $info[food_price]; ?>" /></td>
            </tr>
            <tr>
                <td>地址</td>
                <td><input type="text" name="food_adress" value="<?php echo $info[food_adress]; ?>" /></td>
            </tr>
            <tr>
                <td>运餐费</td>
                <td><input type="text" name="food_yunfei"  value="<?php echo $info[food_yunfei]; ?>" /></td>
            </tr>
            <tr>
                <td>食物图片</td>
                <td><input type="file" name="food_big_img" value="<?php echo SITE_IMG; ?><?php echo $v[food_big_img] ?>" /></td>
            </tr>
            <tr>
                <td>食物详细描述</td>
                <td>
                    <textarea name="food_introduce"><?php echo $info[food_introduce]; ?></textarea>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="修改">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
