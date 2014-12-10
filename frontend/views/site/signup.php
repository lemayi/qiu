<?php
$this->title = '会员注册';
?>

<div class="container cc">
    <!-- center left start -->
    <div class="container-left">
        <h1>欢迎注册成为金球迷</h1>
        <div class="signup-form">
            <form action="" method="post">
                <div class="row">
                    <label for="username">用户名：</label>
                    <input type="text" id="username" name="username" placeholder="请输入用户名">
                    <div class="error">请输入6-15位用户名</div>
                </div>
                <div class="row">
                    <label for="password">密码：</label>
                    <input type="text" id="password" name="password" placeholder="请输入密码">
                    <div class="error">请输入6-15位密码</div>
                </div>
                <div class="row">
                    <label for="repassword">确认密码：</label>
                    <input type="text" id="repassword" name="repassword" placeholder="请重新输入密码">
                    <div class="error">请输入确认密码</div>
                </div>
                <div class="buttons">
                    <a href="#">注册</a>
                    <a href="javascript:history.go(-1)">返回</a>
                </div>
            </form>
        </div>
    </div>
    <!-- center left end -->
    <!-- center right start -->
    <div class="container-right">
        <div class="accout-box">
            <p><b>金球迷</b> - 为球迷服务！</p>
            <p>已经注册？</p>
            <p><a href="/site/login">立即登录</a></p>
        </div>
    </div>
    <!-- center right end -->
</div>