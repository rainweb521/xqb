<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>个人中心</title>
<link rel="stylesheet" type="text/css" href="Public/css/style.css">
</head>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
<body>

<div id="_centent">
<header>

	<div class="top-name"><p>个人中心</p></div>
</header>

<div class="head">
	<div class="head-img" style="margin:10px auto;">
        <a href="index.php?c=setting&a=upfile">
    	<img style="border-radius:40%;font-size: 12px;"  src="<?php echo ($photo); ?>" alt="快点击上传个头像吧">
        </a>
    </div>
    <div class="head-dsb">
    	<p class="dsb-name">--<?php echo ($username); ?></p>
        <p class="dsb-id">--  <?php echo ($mobile); ?></p>
    </div>
</div>
    <!-- JiaThis Button BEGIN -->
    <!--<div class="jiathis_style">-->
        <!--<a class="jiathis_button_fav">收藏夹</a>-->
    <!--</div>-->
    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
    <!-- JiaThis Button END -->
<div class="nav">
	<ul>
    	<li>
        	<i class="idt"></i>
            <p>签到</p>
        </li>
    	<li class="pt-line" style="text-align: center">

                <a class="jiathis_button_fav">
        	<i class="clt"></i>
                    <p>收藏</p>
            </a>
        </li>
    	<li>
            <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">
        	<i class="rcm"></i>
            <p>分享</p>
            </a>
        </li>
    </ul>
</div>


<section class="mt-2"> 
    <div class="ps-lt">
        <a href="index.php?c=setting&a=notice">
        <div class="lt-dsb cl-bb">
            <p>通知</p>
            <!--<i class="check-on"></i>-->
        </div></a>
    </div>
</section>
    <section class="mt-3">
        <div class="ps-lt">
            <div class="lt-dsb">
                <p>排行榜<span style="color: #F7B824;">&nbsp;(还未开通，敬请期待)</span></p>
                <i class="arr-right"></i>
            </div>
        </div>
        <div class="ps-lt">
            <div class="lt-dsb cl-bb">
                <p>我的好友</p>
                <i class="arr-right"></i>
            </div>
        </div>
    </section>
    <section class="mt-3">
        <div class="ps-lt">
            <div class="lt-dsb">
                <p>奖品活动<span style="color: #F7B824;">&nbsp;(还未开通，敬请期待)</span></p>
                <i class="arr-right"></i>
            </div>
        </div>
        <div class="ps-lt">
            <div class="lt-dsb cl-bb">
                <a href="index.php?c=setting&a=win_record">
                <p>兑换记录</p>
                <i class="arr-right"></i>
                </a>
            </div>
        </div>

    </section>

    <!--<section class="mt-3">-->
        <!--<div class="ps-lt">-->
            <!--<div class="lt-dsb">-->
                <!--<p>我的进度</p>-->
                <!--<i class="arr-right"></i>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="ps-lt">-->
            <!--<div class="lt-dsb cl-bb">-->
                <!--<p>我的好友</p>-->
                <!--<i class="arr-right"></i>-->
            <!--</div>-->
        <!--</div>-->
    <!--</section>-->
<section class="mt-3"> 

    <div class="ps-lt">
        <a href="index.php?c=setting&a=advice">
        <div class="lt-dsb">
            <p>意见和反馈</p>
            <i class="arr-right"></i>
        </div>
        </a>
    </div>

    <div class="ps-lt">
        <a href="index.php?c=setting&a=set">
        <div class="lt-dsb cl-bb">
            <p>设置</p>
            <i class="arr-right"></i>
        </div>
        </a>
    </div>
</section>

<div class="jg"></div>
</div>
<footer>
    <div class="mune">
        <a href="index.php?c=index">
        <img src="Public/images/1.png">
        <p>首页</p>
        </a>
    </div>
    <div class="mune">
        <a href="index.php?c=plan">
        <img src="Public/images/3.png">
        <p>计划</p>
        </a>
    </div>
    <div class="mune">
        <a href="index.php?c=earning">
        <img src="Public/images/2.png">
        <p>收益</p>
        </a>
    </div>
    <div class="mune">
        <a href="index.php?c=setting">
        <img src="Public/images/4.png">
        <p>个人</p>
        </a>
    </div>
</footer>
<script>
	(function (doc, win) {
	  var docEl = doc.documentElement,
		resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
		recalc = function () {
		  var clientWidth = docEl.clientWidth;
		  if (!clientWidth) return;
		  docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
		};

	  if (!doc.addEventListener) return;
	  win.addEventListener(resizeEvt, recalc, false);
	  doc.addEventListener('DOMContentLoaded', recalc, false);
	})(document, window);
</script>
<script type="text/javascript" src="Public/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
	$('.check-on').click(function(){
		$(this).toggleClass('check-off');
		})
</script>
</body>
</html>