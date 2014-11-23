<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>成都美食</title>
    <link href="/cdms/Public/css/zhu.css" rel="stylesheet">
    <link href="/cdms/Public/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="/cdms/Public/css/flat-ui.css" rel="stylesheet">
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
    <script src="/cdms/Public/JS/move.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="/cdms/Public/js/bootstrap.min.js"></script>
    <script charset="gbk" src="http://www.baidu.com/js/opensug.js"></script>
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
    <script type="text/javascript">
window.onload=function(){
	var oDiv1=document.getElementById('div1');
	var obtn=document.getElementById('btn');
	var obtn2=document.getElementById('btn2');
	var oditu=document.getElementById('dituContent');
	obtn.onclick=function(){
		obtn.style.display='none';
		obtn2.style.display='block';
		startMove(oDiv1,{left:0})
		
		};
		
	obtn2.onclick=function(){
		obtn2.style.display='none';
		obtn.style.display='block';
		startMove(oDiv1,{left:-624})
		
		};
		
	
		
			
			
	
	function initMap(){
        createMap();
        setMapEvent();
        addMapControl();
        addMarker();
    }
    
    
    function createMap(){
        var map = new BMap.Map("allmap");
        var point = new BMap.Point(104.084224,30.660451);//定义一个中心点坐标
        map.centerAndZoom(point,13);
        window.map = map;
    }
    
    
    function setMapEvent(){
        map.enableDragging();
        map.enableScrollWheelZoom();
        map.enableDoubleClickZoom();
        map.enableKeyboard();
    }
    
    
    function addMapControl(){
        
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
    var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
    var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    
    var markerArr = [{title:"川西坝子",content:"<b>让您泪流满面的火锅体验</b><br /><p align=\"right\"><img src=\"/cdms/Public/images/chuanxi.jpg\" width=\"128\" height\"128\" />",point:"104.040174|30.644016",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ,{title:"红杏酒家（羊西店）",content:"<b>四川老牌的川菜馆，保持了一贯的四川风味</b><br /><p align=\"right\"><img src=\"/cdms/Public/images/hongxing.gif\" width=\"128\" height\"128\" />",point:"104.027134|30.695953",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ,{title:"蜀九香（紫荆店）",content:"<b>典型”的川式火锅</b><br /><p align=\"right\"><img src=\"/cdms/Public/images/shujiu.jpg\" width=\"128\" height\"128\" />",point:"104.05996|30.618936",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ,{title:"陈麻婆豆腐(西玉龙街)",content:"<b>性价比很高的一家老字号饭店</b><br /><p align=\"right\"><img src=\"/cdms/Public/images/chenma.jpg\" width=\"128\" height\"128\" />",point:"104.077015|30.671362",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ,{title:"廖老妈蹄花总店",content:"<b>汤汁浓郁有嚼劲</b><br /><p align=\"right\"><img src=\"/cdms/Public/images/liaoma.jpg\" width=\"128\" height\"128\" />",point:"104.066952|30.662901",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ,{title:"龙抄手（春熙路店）",content:"<b>成都最有名的小吃店</b><br /><p align=\"right\"><img src=\"/cdms/Public/images/longchao.jpg\" width=\"128\" height\"128\" />",point:"104.082628|30.660956",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ,{title:"顺兴老茶馆（沙湾店）",content:"<b>体验老成都文化的绝妙选择!</b><br /><p align=\"right\"><img src=\"/cdms/Public/images/shunxing.jpg\" width=\"128\" height\"128\" />",point:"104.057299|30.697851",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ,{title:"玉林串串香（金沙路店",content:"<b>成都第一家串串香</b><br /><p align=\"right\"><img src=\"/cdms/Public/images/yulin.jpg\" width=\"128\" height\"128\" />",point:"104.050674|30.694057",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ,{title:"明婷饭店",content:"<b>成都最牛苍蝇馆</b><br /><p align=\"right\"><img src=\"/cdms/Public/images/mingting.jpg\" width=\"128\" height\"128\" />",point:"104.095048|30.679046",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ,{title:"刘记铺盖面",content:"<b>大众心中最好吃的小面馆</b><br /><p align=\"right\"><img src=\"/cdms/Public/images/liuji.jpg\" width=\"128\" height\"128\" /></p>",point:"104.032687|30.70313",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ];
   
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();
};
 
    
</script>
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
    
    <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="/cdms/Public/images/01.jpg" alt="">
                    
                  </div>
                  <div class="item">
                    <img src="/cdms/Public/images/02.jpg" alt="">
                    
                  </div>
                  <div class="item">
                    <img src="/cdms/Public/images/03.jpg" alt="">
                   
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
              </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.carousel').carousel()
        });
    </script>
<div id="div1"><a style="background:url(/cdms/Public/images/icons/svg/compas.svg) no-repeat; width:300px; height:100px; display:block; position:absolute; margin-left:150px;"></a>
<div style="width:600px; height:530px; margin-top:100px; display:block; border:#ccc solid 1px; z-index:500; position:absolute;" id="allmap"></div>
    <div id="slide_bar">
    	<button type="button" id="btn"></button>
    	<button type="button" id="btn2"></button>
	</div>
</div>
    <div id="three"></div>
<div style="width:960px;height:300px;margin-left:200px;">
    <div id="top"><p class="num">NO.1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/cdms/index.php/Food/addClick/food_id/<?php echo ($food[0][id]); ?>"><?php echo ($food[0][name]); ?></a></p><p class="num">NO.2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/cdms/index.php/Food/addClick/food_id/<?php echo ($food[1][id]); ?>"><?php echo ($food[1][name]); ?></a></p>
    <p class="num">NO.3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/cdms/index.php/Food/addClick/food_id/<?php echo ($food[2][id]); ?>"><?php echo ($food[2][name]); ?></a></p><p class="num">NO.4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/cdms/index.php/Food/addClick/food_id/<?php echo ($food[3][id]); ?>"><?php echo ($food[3][name]); ?></a></p></div>
    <div id="share">
    	<p style="font-size:22px; margin-top:60px; margin-left:15px; margin-right:15px;">&nbsp;&nbsp;话说民以食为天，各位吃货肯定吃到过更多的人间美味。最近吃到些什么好吃的呢，一起来分享下吧，让大伙一起尝尝鲜。</p>
        <p style="font-size:22px; ; margin-top:-10px; margin-left:205px; margin-right:15px;"><a href="#">点击分享</a></p>
    </div>
    <div id="about">
    <p style="font-size:22px; color:#fff; margin-top:60px; margin-left:15px; margin-right:15px;">&nbsp;&nbsp;我们是一个专门来分享成都美食的小站，目的是为了让大家吃遍成都所有美食与小吃，不放过任何一家好吃的地点。欢迎入驻。</p></div>	
</div>
    <p class="foot">Copyright&copy; 2014 xxxx.net All Rights Reserved. 版权所有:</p>

</body>
</html>