<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/5
 * Time: 15:08
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>韩食外卖1111111111</title>
    <link rel="stylesheet" href="<?php echo Yii::$app->request->baseUrl; ?>/css/index.css" />
</head>

<body>
<!--内容头部开始-->
<div class="ctop">
    <div class="ctop_left">
        <p>服务时间：周一~周六09:00-23:00</p>
        <img class="ctop_leftImg" src="<?php echo Yii::$app->request->baseUrl; ?>/image/dc.jpg" />
        <a href="#"><img src="<?php echo Yii::$app->request->baseUrl; ?>/image/by_button.png" /></a> <!-- 轻轻一点。。 -->
        <a href="#"><img src="<?php echo Yii::$app->request->baseUrl; ?>/image/dc_button.png" /></a>  <!-- 提前订餐 -->
    </div>
    <div class="pic_slide">
        <?php foreach($info as $k=>$v){ ?>
            <a href="/0901/food/index.php/Home/Cart/addcart/food_id/<?php echo $v[food_id];?>"><img src="<?php echo SITE_IMG; ?><?php echo $v[food_big_img] ?>" /></a>
            <!-- 跳转到购买的页面 -->
        <?php } ?>
        <ul>
            <li class="pic_slideBg"></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="ctop_right">
        <h5>公司新闻<span> COMPANY NEWS</span></h5>
        <div  class="new_list">
            <ul>
                <li><b></b><a href="#">欢迎访问韩师外卖服务平台...</a></li>
                <li><b></b><a href="#">韩师外卖服务平台，专门为韩师学生服务...</a></li>
            </ul>
        </div>
        <ul class="dingdan">
            <li id="up_slideone">
                <p>订单编号：2014090912988</p>
                <p>收件人：龚先生</p>
                <p>订单状态：<span class="dingdan_onebg">已签收</span><span class="dingdan_twobg">已评价</span></p>
            </li>
            <li id="up_slidetwo">
                <p>订单编号：2014090912988</p>
                <p>收件人：王小姐</p>
                <p>订单状态：<span class="dingdan_onebg">已签收</span><span class="dingdan_twobg">已评价</span></p>
            </li>
            <li id="up_slidethree">
                <p>订单编号：2014090912988</p>
                <p>收件人：李先生</p>
                <p>订单状态：<span class="dingdan_threebg">已发货</span></p>
            </li>
        </ul>
    </div>
</div>
<!--内容头部结束-->

<!--内容尾部开始-->
<div class="cbottom">
    <div class="foodlist">
        <div class="foodTitle">
            <ul class="diancai">
                <li class="foodTitle_bg">点菜</li>
                <li>餐馆</li>
            </ul>
            <p><a href="#">中餐</a><a href="#">西餐</a><a href="#">甜点</a><a href="#">日韩料理</a></p>
            <span><a href="#">more>></a></span>
        </div>
        <div class="foodArea">
            <ul>
                <li><a href="#">湘桥区</a></li>
                <li><a href="#">枫溪区</a></li>
                <li><a href="#">潮安区</a></li>
                <li><a href="#">湘桥区</a></li>
                <li><a href="#">枫溪区</a></li>
                <li><a href="#">潮安区</a></li>
                <li><a href="#">湘桥区</a></li>
                <li><a href="#">枫溪区</a></li>
                <li><a href="#">潮安区</a></li>
                <li><a href="#">湘桥区</a></li>
                <li><a href="#">枫溪区</a></li>
                <li><a href="#">潮安区</a></li>
            </ul>
        </div>
        <div class="foodslide">
            <div class="foodPic">
                <ul>
                    <?php foreach($info as $k=>$v){ ?>
                        <li><a href="/0901/food/index.php/Home/Cart/addcart/food_id/<?php echo $v[food_id];?>"><img src="<?php echo SITE_IMG; ?><?php echo $v[food_big_img] ?>" /></a><br/><p><?php echo $v[food_name] ?><span>¥<?php echo $v[food_price] ?></span></p></li>

                    <?php } ?>
                </ul>
                <dl>
                    <dd><a href="/0901/food/index.php/Home/Cart/shop"><img src="<?php echo Yii::$app->request->baseUrl; ?>/image/wpjnewlogo.jpg" /></a></dd>
                    <dd><a href="/0901/food/index.php/Home/Cart/shop"><img src="<?php echo Yii::$app->request->baseUrl; ?>/image/weijia.jpg" /></a></dd>
                    <dd><a href="/0901/food/index.php/Home/Cart/shop"><img src="<?php echo Yii::$app->request->baseUrl; ?>/image/wpjnewlogo.jpg" /></a></dd>
                    <dd><a href="/0901/food/index.php/Home/Cart/shop"><img src="<?php echo Yii::$app->request->baseUrl; ?>/image/weijia.jpg" /></a></dd>
                    <dd><a href="/0901/food/index.php/Home/Cart/shop"><img src="<?php echo Yii::$app->request->baseUrl; ?>/image/wpjnewlogo.jpg" /></a></dd>
                </dl>
            </div>
            <div class="cangtingPic">
                <ul>
                    <?php foreach($infom as $k=>$v){ ?>
                        <li>
                            <a href="/0901/food/index.php/Home/Cart/shop/shop_id/<?php echo $v[shop_id] ?>"><img src="<?php echo SITE_IMG; ?><?php echo $v[shop_img] ?>" /></a><br/><h5><?php echo $v[shop_name] ?><span>预定折扣价</span><b>8.9折</b></h5>
                            <p><?php echo $v[shop_introduce] ?></p>
                            <p>店铺评分：<img src="<?php echo Yii::$app->request->baseUrl; ?>/image/star-on.png" /><img src="<?php echo Yii::$app->request->baseUrl; ?>/image/star-on.png" /><img src="<?php echo Yii::$app->request->baseUrl; ?>/image/star-on.png" /><img src="<?php echo Yii::$app->request->baseUrl; ?>/image/star-on.png" /><img src="<?php echo Yii::$app->request->baseUrl; ?>/image/star-off.png" /></p>
                            <p>店铺地址：<?php echo $v[shop_adress] ?></p>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="cbRight">
        <a href="order.html"><img src="<?php echo Yii::$app->request->baseUrl; ?>/image/2014911.jpg" /></a>
        <div class="pingjia">
            <h5>用户菜品点评</h5>
            <ul>
                <li>
                    <img src="<?php echo Yii::$app->request->baseUrl; ?>/image/11.jpg" />
                    <p>用户“DeathGhost”对[ 老李川菜馆 ]“酸辣土豆丝”评说：味道挺不错，送餐速度挺快...</p>
                </li>
                <li>
                    <img src="<?php echo Yii::$app->request->baseUrl; ?>/image/12.jpg" />
                    <p>用户“DeathGhost”对[ 老李川菜馆 ]“酸辣土豆丝”评说：味道挺不错，送餐速度挺快...</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--内容尾部结束-->
</body>
<script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/js/index.js"></script>
</html>

