<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/7
 * Time: 10:11
 */?>
<!doctype html public "-//w3c//dtd xhtml 1.0 frameset//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-frameset.dtd">
<html>
<head>
    <meta http-equiv=content-type content="text/html; charset=utf-8" />
    <meta http-equiv=pragma content=no-cache />
    <meta http-equiv=cache-control content=no-cache />
    <meta http-equiv=expires content=-1000 />

    <title>管理中心 v1.0</title>
</head>
<frameset border=0 framespacing=0 rows="60, *" frameborder=0>
    <frame name=head src="<?php echo Yii::$app->urlManager->createUrl('main/head');?>" frameborder=0 noresize scrolling=no>
    <frameset cols="170, *">
        <frame name=left src="<?php echo Yii::$app->urlManager->createUrl('main/left');?>" frameborder=0 noresize />
        <frame name=right src="<?php echo Yii::$app->urlManager->createUrl('main/right');?>" frameborder=0 noresize scrolling=yes />
    </frameset>
</frameset>
<noframes>
</noframes>
</html>

