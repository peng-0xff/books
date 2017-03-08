<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/7
 * Time: 11:32
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv=content-type content="text/html; charset=utf-8" />
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/css/admin.css" type="text/css" rel="stylesheet" />
    <script language=javascript>
        function expand(el)
        {
            childobj = document.getElementById("child" + el);

            if (childobj.style.display == 'none')
            {
                childobj.style.display = 'block';
            }
            else
            {
                childobj.style.display = 'none';
            }
            return;
        }
    </script>
</head>
<body>
<table height="100%" cellspacing=0 cellpadding=0 width=170
       background=<?php echo Yii::$app->request->baseUrl; ?>/img/menu_bg.jpg border=0>
    <tr>
        <td valign=top align=middle>
            <table cellspacing=0 cellpadding=0 width="100%" border=0>

                <tr>
                    <td height=10></td></tr></table>
            <table cellspacing=0 cellpadding=0 width=150 border=0>

                <tr height=22>
                    <td style="padding-left: 30px" background=<?php echo Yii::$app->request->baseUrl; ?>/img/menu_bt.jpg><a
                            class=menuparent onclick=expand(1)
                            href="javascript:void(0);">关于网站</a></td></tr>
                <tr height=4>
                    <td></td></tr></table>
            <table id=child1 style="display: none" cellspacing=0 cellpadding=0
                   width=150 border=0>
                <tr height=20>
                    <td align=middle width=30><img height=9
                                                   src="<?php echo Yii::$app->request->baseUrl; ?>/img/menu_icon.gif" width=9></td>
                    <td><a class=menuchild
                           href="<?php echo Yii::$app->urlManager->createUrl('main/about'); ?>"
                           target=right>网站宗旨</a></td></tr>




                <tr height=4>
                    <td colspan=2></td></tr></table>

            <table cellspacing=0 cellpadding=0 width=150 border=0>
                <tr height=22>
                    <td style="padding-left: 30px" background=<?php echo Yii::$app->request->baseUrl; ?>/img/menu_bt.jpg><a
                            class=menuparent onclick=expand(3)
                            href="javascript:void(0);">仓库管理</a></td></tr>
                <tr height=4>
                    <td></td></tr></table>
            <table id=child3 style="display: none" cellspacing=0 cellpadding=0
                   width=150 border=0>
                <tr height=20>
                    <td align=middle width=30><img height=9
                                                   src="<?php echo Yii::$app->request->baseUrl; ?>/img/menu_icon.gif" width=9></td>
                    <td><a class=menuchild
                           href="/0901/food/index.php/Admin/Food/showfood"
                           target=right>所有书本</a></td></tr>
                <tr height=20>
                    <td align=middle width=30><img height=9
                                                   src="<?php echo Yii::$app->request->baseUrl; ?>/img/menu_icon.gif" width=9></td>
                    <td><a class=menuchild
                           href="<?php echo Yii::$app->urlManager->createUrl('books/add');?>"
                           target=right>添加书本</a></td></tr>
                <tr height=20>
                    <td align=middle width=30><img height=9
                                                   src="<?php echo Yii::$app->request->baseUrl; ?>/img/menu_icon.gif" width=9></td>
                    <td><a class=menuchild
                           href="/0901/food/index.php/Admin/Food/showfood"
                           target=right>修改书本</a></td></tr>

                <tr height=4>
                    <td colspan=2></td></tr></table>
            <table cellspacing=0 cellpadding=0 width=150 border=0>
                <tr height=22>
                    <td style="padding-left: 30px" background=<?php echo Yii::$app->request->baseUrl; ?>/img/menu_bt.jpg><a
                            class=menuparent onclick=expand(4)
                            href="javascript:void(0);">订单管理</a></td></tr>
                <tr height=4>
                    <td></td></tr></table>
            <table id=child4 style="display: none" cellspacing=0 cellpadding=0
                   width=150 border=0>
                <tr height=20>
                    <td align=middle width=30><img height=9
                                                   src="<?php echo Yii::$app->request->baseUrl; ?>/img/menu_icon.gif" width=9></td>
                    <td><a class=menuchild
                           href="/0901/food/index.php/Admin/Dingdan/showdingdan"
                           target=right>所有订单</a></td></tr>
                <tr height=20>
                    <td align=middle width=30><img height=9
                                                   src="<?php echo Yii::$app->request->baseUrl; ?>/img/menu_icon.gif" width=9></td>
                    <td><a class=menuchild
                           href="/0901/food/index.php/Admin/Dingdan/showdingdan"
                           target=right>订单修改</a></td></tr>

                <tr height=4>
                    <td colspan=2></td></tr></table>
            <table cellspacing=0 cellpadding=0 width=150 border=0>
                <tr height=22>
                    <td style="padding-left: 30px" background=<?php echo Yii::$app->request->baseUrl; ?>/img/menu_bt.jpg><a
                            class=menuparent onclick=expand(5)
                            href="javascript:void(0);">买家管理</a></td></tr>
                <tr height=4>
                    <td></td></tr></table>
            <table id=child5 style="display: none" cellspacing=0 cellpadding=0
                   width=150 border=0>

                <tr height=20>
                    <td align=middle width=30><img height=9
                                                   src="<?php echo Yii::$app->request->baseUrl; ?>/img/menu_icon.gif" width=9></td>
                    <td><a class=menuchild
                           href="/0901/food/index.php/Admin/User/showuser"
                           target=right>所有买家</a></td></tr>
                <tr height=20>
                    <td align=middle width=30><img height=9
                                                   src="<?php echo Yii::$app->request->baseUrl; ?>/img/menu_icon.gif" width=9></td>
                    <td><a class=menuchild
                           href="/0901/food/index.php/Admin/Adr/showadr"
                           target=right>买家地址</a></td></tr>
                <tr height=4>
                    <td colspan=2></td></tr></table>
            <table cellspacing=0 cellpadding=0 width=150 border=0>

                <tr height=4>
                    <td></td></tr></table>

            <table cellspacing=0 cellpadding=0 width=150 border=0>

                <tr height=22>
                    <td style="padding-left: 30px" background=<?php echo Yii::$app->request->baseUrl; ?>/img/menu_bt.jpg><a
                            class=menuparent onclick=expand(7)
                            href="javascript:void(0);">卖家管理</a></td></tr>
                <tr height=4>
                    <td></td></tr></table>
            <table id=child7 style="display: none" cellspacing=0 cellpadding=0
                   width=150 border=0>

                <tr height=20>
                    <td align=middle width=30><img height=9
                                                   src="<?php echo Yii::$app->request->baseUrl; ?>/img/menu_icon.gif" width=9></td>
                    <td><a class=menuchild
                           href="/0901/food/index.php/Admin/Shop/showshop"
                           target=right
                        >所有卖家</a></td></tr>
                <tr height=20>
                    <td align=middle width=30><img height=9
                                                   src="<?php echo Yii::$app->request->baseUrl; ?>/img/menu_icon.gif" width=9></td>
                    <td><a class=menuchild
                           href="/0901/food/index.php/Admin/Shop/tianjia"
                           target=right>添加卖家</a></td></tr>
                <tr height=20>
                    <td align=middle width=30><img height=9
                                                   src="<?php echo Yii::$app->request->baseUrl; ?>/img/menu_icon.gif" width=9></td>
                    <td><a class=menuchild
                           href="/0901/food/index.php/Admin/Shop/showshop"
                           target=right>修改卖家</a></td></tr>

                <table cellspacing=0 cellpadding=0 width=150 border=0>

                    <tr height=22>
                        <td style="padding-left: 30px" background=<?php echo Yii::$app->request->baseUrl; ?>/img/menu_bt.jpg><a
                                class=menuparent onclick=expand(0)
                                href="javascript:void(0);">网站管理</a></td></tr>
                    <tr height=4>
                        <td></td></tr></table>
                <table id=child0 style="display: none" cellspacing=0 cellpadding=0
                       width=150 border=0>

                    <tr height=20>
                        <td align=middle width=30><img height=9
                                                       src="<?php echo Yii::$app->request->baseUrl; ?>/img/menu_icon.gif" width=9></td>
                        <td><a class=menuchild
                               href="/0901/food/index.php/Admin/Admin/showadmin"
                               target=right>管理员</a></td></tr>
                    <tr height=20>
                        <td align=middle width=30><img height=9
                                                       src="<?php echo Yii::$app->request->baseUrl; ?>/img/menu_icon.gif" width=9></td>
                        <td><a class=menuchild
                               onclick="if (confirm('确定要退出吗？')) return true; else return false;"
                               href="<?php echo Yii::$app->urlManager->createUrl('login/logout'); ?>"
                               target=_top>退出系统</a></td></tr></table></td>
                <td width=1 bgcolor=#d1e6f7></td>
                </tr>
            </table>
</body>
</html>

