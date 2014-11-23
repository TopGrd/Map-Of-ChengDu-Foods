<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>成都美食</title>
     <link href="/cdms/Public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/cdms/Public/css/flat-ui.css" rel="stylesheet">
    <link href="/cdms/Public/css/main.css" rel="stylesheet">
    <style>
        body{
            cursor:url('images/Cursor.cur'),default;
        }
    </style>
</head>
<body>
          <div class="login-form">
            <form action="../User/login" method="post">
              <div class="form-group">
                <input name="name" type="text" class="form-control login-field" value="" placeholder="用户名/邮箱" id="login-name" />
                <label class="login-field-icon fui-user" for="login-name"></label>
              </div>

              <div class="form-group">
                <input name="psw" type="password" class="form-control login-field" value="" placeholder="密码" id="login-pass" />
                <label class="login-field-icon fui-lock" for="login-pass"></label>
              </div>
              <input type="submit" class="btn btn-primary btn-lg btn-block" value="登录" id="login-btn1" />
            </form>
            <a class="btn btn-primary btn-lg btn-block" href="/cdms/index.php/User/regist.html" id="login-btn2">注册</a>
            <a class="login-link" href="#">忘记密码?</a>
          </div>


</body>
</html>