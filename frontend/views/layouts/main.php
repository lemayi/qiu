<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="keywords" content="首页" >
    <meta name="description" content="首页" >
    <link rel="icon" href="<?= Yii::getAlias('@asset') ?>/logo.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?= Yii::getAlias('@asset') ?>/logo.ico" type="image/x-icon">
    <link rel="bookmark" href="<?= Yii::getAlias('@asset') ?>/logo.ico" type="image/x-icon">
    <link href="<?= Yii::getAlias('@asset') ?>/css/index.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="wrap">
        <!-- header start -->
        <div class="header-wrap">
            <div class="header cc">
                <!-- logo start -->
                <div class="logo">
                    <a href="<?= yii::$app->getHomeUrl() ?>">
                        <img src="http://www.phpwind.net/themes/site/default/images/logo.png" alt="金球迷网">
                    </a>
                </div>
                <!-- logo end -->
                <!-- nav start -->
                <ul class="nav cc">
                    <li class="current"><a href="<?= yii::$app->getHomeUrl() ?>">首页</a></li>
                    <li><a href="#">西甲</a></li>
                    <li><a href="#">英超</a></li>
                    <li><a href="#">德甲</a></li>
                    <li><a href="#">意甲</a></li>
                    <li><a href="#">法甲</a></li>
                    <li><a href="#">中超</a></li>
                    <li><a href="#">NBA</a></li>
                    <li><a href="#">CBA</a></li>
                    <li><a href="#">视频</a></li>
                    <li><a href="#">直播表</a></li>
                    <li><a href="#">比赛录像</a></li>
                </ul>
            <!-- nav end -->
                <!-- header right start -->
                <div class="header-right">
                    <!--
                    <a href="/site/login" rel="nofollow">登录</a>
                    <a href="/site/signup" rel="nofollow">注册</a>
                    -->
                    <a href="/site/login" rel="nofollow">好长好长的名字</a>
                    <a href="/site/login" rel="nofollow">个人中心</a>
                    <a href="/site/signup" rel="nofollow">退出</a>
                </div>
                <!-- header right end -->
            </div>
        </div>
        <div class="sub-nav">
            <div class="box">
                <a href="/site/login" rel="nofollow">曼联</a>
                <a href="/site/login" rel="nofollow">阿森纳</a>
                <a href="/site/signup" rel="nofollow">切尔西</a>
                <a href="/site/signup" rel="nofollow">曼城</a>
                <a href="/site/login" rel="nofollow">曼联</a>
                <a href="/site/login" rel="nofollow">阿森纳</a>
                <a href="/site/signup" rel="nofollow">切尔西</a>
                <a href="/site/signup" rel="nofollow">曼城</a>
                <a href="/site/login" rel="nofollow">曼联</a>
                <a href="/site/login" rel="nofollow">阿森纳</a>
                <a href="/site/signup" rel="nofollow">切尔西</a>
                <a href="/site/signup" rel="nofollow">曼城</a>
                <a href="/site/login" rel="nofollow">曼联</a>
                <a href="/site/login" rel="nofollow">阿森纳</a>
                <a href="/site/signup" rel="nofollow">切尔西</a>
                <a href="/site/signup" rel="nofollow">曼城</a>
            </div>
        </div>
        <!-- header end -->

        <!-- center start -->
        <?= $content ?>
        <!-- center end -->

        <!-- footer start -->
        <div class="footer-wrap">
            <div class="footer">
                <div class="links">
                    <a href="#">关于网站</a>
                    <a href="#">关于网站</a>
                    <a href="#">关于网站</a>
                    <a href="#">关于网站</a>
                    <a href="#">关于网站</a>
                    <a href="#">关于网站</a>
                    <a href="#">关于网站</a>
                    <a href="#">关于网站</a>
                    <a href="#">关于网站</a>
                    <a href="#">关于网站</a>
                    <a href="#">关于网站</a>
                    <a href="#">关于网站</a>
                </div>
                <div class="copy">
                    Copyright ©2014, All Rights Reserved. 宝中旅游·四川新东方国际旅行社
                </div>
            </div>
        </div>
        <!-- footer end -->
    </div>
</body>
</html>