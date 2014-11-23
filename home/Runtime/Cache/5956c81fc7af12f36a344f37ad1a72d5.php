<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>
            成都美食
        </title>
        <link href="/cdms/Public/css/main.css" rel="stylesheet">
        <link href="/cdms/Public/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/cdms/Public/css/flat-ui.css" rel="stylesheet">
        <script type="/cdms/text/javascript" src="Public/js/flatui-radio.js">
        </script>
        <script src="/cdms/Public/js/jquery-1.8.3.min.js">
        </script>
        <script src="/cdms/Public/js/jquery-ui-1.10.3.custom.min.js">
        </script>
        <script src="/cdms/Public/js/jquery.ui.touch-punch.min.js">
        </script>
        <script src="/cdms/Public/js/bootstrap.min.js">
        </script>
        <script src="/cdms/Public/js/bootstrap-select.js">
        </script>
        <script src="/cdms/Public/js/bootstrap-switch.js">
        </script>
        <script src="/cdms/Public/js/flatui-checkbox.js">
        </script>
        <script src="/cdms/Public/js/flatui-radio.js">
        </script>
        <style>
            body{ cursor:url('images/Cursor.cur'),default; }
        </style>
    </head>
    
    <body>
        <div id="registM">
            <form id="reg_form" action="../User/regist" method="post">
                <div class="form-group">
                    <div class="input-group inners">
                        <span class="input-group-addon">
                            <span class="fui-user">
                            </span>
                        </span>
                        <input type="text" class="form-control" name="name" placeholder="用户名"
                        />
                    </div>
                    <div class="input-group inners">
                        <span class="input-group-addon">
                            @
                        </span>
                        <input type="text" class="form-control" name="email" placeholder="邮箱地址"
                        />
                    </div>
                    <div class="input-group inners">
                        <span class="input-group-addon">
                            <span class="fui-lock">
                            </span>
                        </span>
                        <input type="password" class="form-control" name="psw" placeholder="密码" />
                    </div>
                    <label class="radio">
                        <input type="radio" name="sex" value="0" data-toggle="radio" checked>
                        男
                    </label>
                    <label class="radio">
                        <input type="radio" name="sex" value="1" data-toggle="radio">
                        女
                    </label>
                    <p style="float:left;color:#1abc9c;">
                        成都居民
                    </p>
                    <div style="float:left;" class="switch switch-square" data-on-label="<i class='fui-check'></i>"
                    data-off-label="<i class='fui-cross'></i>">
                        <input type="checkbox" />
                    </div>
                    <input id="local_input" type="hidden" name="local" value="1" >
                </div>
            </form>
            <button class="btn btn-primary" onclick="submitForm();" type="button" id="tijiao">
                提交
            </button>
        </div>
    </body>
    <script type="text/javascript">
    function changeInput () {
        var val = ($(".switch-on")[0] === undefined)? 0 : 1;
        $("#local_input").val(val);
        return false;
    }
    function submitForm () {
        changeInput();
        $("#reg_form").submit();
        return false;
    }
    </script>

</html>