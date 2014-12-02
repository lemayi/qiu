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
    <link href="<?= Yii::getAlias('@asset') ?>/css/index.css" type="text/css" rel="stylsheet">
</head>

<body>
    <div class="head-band">
        <div class="head-content">
        <a class="digg-logo" href="<?= yii::$app->getHomeUrl() ?>"></a>
                <!-- 导航 -->
            <div class="action-menu">
                                        
                <a class="tb active" href="/all/hot/recent/1">全部</a>
                                
                
                                    
                    <a class="tb" href="/r/news/hot/1">42区</a>
                    
                
                                    
                    <a class="tb" href="/r/scoff/hot/1">段子</a>
                    
                
                                    
                    <a class="tb" href="/r/pic/hot/1">图片</a>
                    
                
                                    
                    <a class="tb" href="/r/tec/hot/1">挨踢1024</a>
                    
                
                                    
                    <a class="tb" href="/r/ask/hot/1">你问我答</a>
                    
                

                <!-- <a href="/c/review/hot/1" class="tb" style="color:#ffcc33;">待创建</a> -->
            
                <!--
                <a href="/r/news/hot/1" class="tb">资讯</a>
                <a href="/r/scoff/hot/1" class="tb">段子</a>
                <a href="/r/pic/hot/1" class="tb">图片</a>
                <a href="/r/video/hot/1" class="tb">视频</a>              
                <a href="/r/tec/hot/1" class="tb">挨踢1024</a>
                <a href="/r/buy/hot/1" class="tb">相见恨晚</a>
                <a href="/r/pub/hot/1" class="tb">公众场合不宜</a>    
                -->
                
            </div>
        <div class="key-sera">
        
                        <form id="searchFrm2" name="searchFrm2" method="post" action="/search/show">
                            <input type="text" autocomplete="off" id="txtSearch2" name="words" class="search-txt-s">
                            
                            <a id="searchBtn_3" name="searchBtn_2" class="i" href="javascript:;"><span class="ico"></span></a>                              
                            <input type="hidden" name="page" id="page" value="1">
                        </form>         
            
        </div>  
        <div class="action-nav">
            
            
                
                <a id="reg-link-a" class="login-btn-a" href="javascript:;">注册</a><a id="login-link-a" class="login-btn-a" href="javascript:;">登录</a>
                                
            
                        
        </div>

        
        
        <!-- 保存当前登录用户destJid -->
        <input type="hidden" value="" id="hidjid">
    </div>
    </div>
<!--
<script src="/js/site.js" type="text/javascript" >
-->
</body>
</html>