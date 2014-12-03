<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <title>首页</title>
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
    <div class="header_wrap">
        <div class="header cc">
            <!-- logo start -->
            <div class="logo">
                <a href="<?= yii::$app->getHomeUrl() ?>">
                    <img src="http://www.phpwind.net/themes/site/default/images/logo.png" alt="金球迷网">
                </a>
            </div>
            <!-- logo end -->
            <!-- nav start -->
            <div class="nav">
                <ul>
                    <li class="current"><a href="#">首页</a></li>
                    <li><a href="#">西甲</a></li>
                    <li><a href="#">英超</a></li>
                    <li><a href="#">德甲</a></li>
                    <li><a href="#">意甲</a></li>
                    <li><a href="#">法甲</a></li>
                    <li><a href="#">中超</a></li>
                    <li><a href="#">NBA</a></li>
                    <li><a href="#">CBA</a></li>
                </ul>
            </div>
            <!-- nav end -->
            <!-- header right start -->
            <div class="header_right">
                <a href="#" rel="nofollow">登录</a>
                <a href="#" rel="nofollow">注册</a>
            </div>
            <!-- header right end -->
        </div>
    </div>
    <!-- header end -->
    <div class="main_wrap">
        <div class="main cc">
            <div class="main_left">
                <div class="main_left_nav">
                    <ul>
                        <li class="current"><a href="#">最热</a></li>
                        <li><a href="#">最新</a></li>
                    </ul>
                    <div class="content_filter"></div>
                </div>
                <div class="main_left_box"></div>
            </div>
            <div class="main_right">
            </div>
        </div>
    </div>
</div>
<!--
<script src="/js/site.js" type="text/javascript" >
-->
</body>
</html>