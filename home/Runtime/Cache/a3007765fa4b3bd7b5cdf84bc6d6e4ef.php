<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo ($food_name); ?></title>
        <link href="/cdms/Public/css/zhu.css" rel="stylesheet">
    <link href="/cdms/Public/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="/cdms/Public/css/flat-ui.css" rel="stylesheet">
    <link href="/cdms/Public/css/branch.css" rel="stylesheet">
    <script src="/cdms/Public/js/jquery-1.8.3.min.js"></script>
    <script src="/cdms/Public/js/jquery.tagsinput.js"></script>
    <script src="/cdms/Public/js/typeahead.js"></script>
    <script type="text/javascript" src="/cdms/Public/js/zh_cn.js"></script>
    <script type="text/javascript" src="/cdms/Public/js/swfobject.js"></script>
    <script type="text/javascript" src="/cdms/Public/js/emotion_data.js"></script>
    <script type="text/javascript" src="/cdms/Public/js/emotion.js"></script>
    <link href="/cdms/Public/css/emotion.css" rel="stylesheet" type="text/css" />
    <style>
        body{
            margin:0;
            padding:0;
        }
        #search{
            width:275px;
            margin-top:30px;
            position:absolute;
            margin-left:800px;
        }
    </style>
</head>
<body>
        <div id="nav">
        <a href="/cdms/index.php"> <div id="logo"></div></a>
        <div class="input-group" id="search">                               
                  <input type="text" class="form-control" placeholder="Search" id="search-query-3">
                  <span class="input-group-btn">
                    <button type="submit" class="btn"><span class="fui-search"></span></button>
                  </span>
                </div>
        <input type="hidden" id="id" value="<?php echo ($user_id); ?>" >
        <script type="text/javascript">
            $(document).ready(function(){
            var id=$('#id').val();
            var oOut=$("#userout");
            var oIn=$("#userin");
            if(id==0||id==null){
                oOut.css('display','block');
            }
            else{
                oOut.css('display','none');
                oIn.css('display','block');
            }
            });
                    </script>
        <div id="login1">
            <span class="fui-user" id="userout"><a class="logina" href="/cdms/index.php/User/login.html">登录</a>/<a class="logina" href="/cdms/index.php/User/regist.html">注册</a></span>
            <div id="userin" style="display:none;"><img class="userp" src="<?php echo ($icon); ?>"><a class="logina" href="#"><?php echo ($user_name); ?></a>/<a class="logina" href="/cdms/index.php/User/logout.html">登出</a></div>
            </div>
        </div>

    <div class="tile tile-hot" id="content">
        
        <h1><?php echo ($food_name); ?></h1>
        <img src="<?php echo ($food_image); ?>">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($food_introduction); ?></p>
        <p style="font-size:20px;position:absolute;margin-top:-27px;">地址:</p>
        <span><?php echo ($food_address); ?></span>
        <input name="tagsinput" class="tagsinput" value="好吃,有点辣,给力,还好" />
        <script type="text/javascript">
            $(".tagsinput").tagsInput({
                
            });
            
        </script>
         </div>
    <span class="fui-new" id="new"></span>
    <form name="comment" action="../../update" method="post">
        
        <input type="hidden" name="food_id" value="<?php echo ($food_id); ?>">
        <input type="hidden" name="user_id" value="<?php echo ($user_id); ?>">
    <div>
            <textarea class="form-control" type="text" id="coment" name="content" placeholder="评价一下吧" ></textarea>
          
    </div>

    <a id="facebtn" href="#"><em class="face"></em></a>
    <button class="btn btn-primary" type="submit" id="tijiao1">提交</button>
        
    </form>
    
    
    <?php if(is_array($comment)): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="otherinfo">
        <div class="info2">
        <img class="photo" src="<?php echo ($vo["icon"]); ?>">
       
        <p class="info1"> <?php echo ($vo["content"]); ?></p><br>
            </div>
        <small class="username"> <?php echo ($vo["name"]); ?></small>
    </div>
    <br><?php endforeach; endif; else: echo "" ;endif; ?>
    <script type="text/javascript">
       
    </script>
            
     
    <script type="text/javascript">
        $(document).ready(function(){
            $('#facebtn').showEmotion({input:$('#coment')});
            $('.facebtn1').showEmotion({input:$('.comment1')});
            // 3.显示表情调用方法
            $('.info1').listEmotion();
        });
    </script>
</body>
</html>