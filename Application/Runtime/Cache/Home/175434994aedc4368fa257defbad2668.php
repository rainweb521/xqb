<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>个人中心</title>
<link rel="stylesheet" type="text/css" href="Public/css/style.css">
<link rel="stylesheet" href="Public/css/layui.css"  media="all">
</head>

<body>

<div id="_centent">
<header>

	<div class="top-name"><p>收益</p></div>
</header>
<br>
<div style="width: 100%;height: 150px;background-color: #ff9966;color: white">
<div style="font-size: 13px;">当前帐户：<?php echo ($user); ?></div>
<div >
	<div align="center" style="text-align: center; padding-top: 10px;">
				<!-- <h5 style="font-size: 15px;">总资产</h5> -->
				<h2 style="font-size: 40px;">￥<?php echo ($earn); ?></h2>
				<h5 style="font-size: 13px;">今日收益(元)</h5>
				<br>
				<h5 style="font-size: 15px;">总资产&nbsp;<?php echo ($balance); ?>&nbsp;元</h5>
			<!-- 	<div   style="font-size: 15px;padding-left: 90px;" >
					<li style="float: left;">昨日收益 <br>25.15元 </li>

					<li style="float: left;">累计收益<br>579.17元</li>
				</div> -->
			</div>
</div>
</div>
<section class="mt-1">
    <div class="ps-lt">
        <div class="lt-dsb cl-bb" style="height: 60px;">
            <div style="text-align: center;height: 60px;width: 37%; float: left;padding-left: 10px;margin-right: 10px;
            	/*border-right-color: #f2f2f2;border-right-width: 5px;
            border-left-color: white;border-top-color: white;
            border-bottom-color: white;
            border-style: solid;*/
            ">累计收益<br><?php echo ($all_earning); ?>元</div>
            <div style="text-align: center;height: 60px; width: 47%; float: right;padding-right: 10px;margin-left: 10px;
            border-left-color: #f2f2f2;border-left-width: 5px;
            border-right-width: 0px;border-top-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;">累计亏损<br><?php echo ($all_loss); ?>元</div>
        </div>
    </div>
</section>
    <section class="mt-1">
        <div class="ps-lt">
            <a href="index.php?c=earning&a=count">
            <div class="lt-dsb cl-bb">
                <p>收益计算</p>
                <i class="arr-right"></i>
            </div>
            </a>
        </div>
    </section>
<section class="mt-1">
    <div class="ps-lt">
        <a href="index.php?c=earning&a=record&tip=0">
            <div class="lt-dsb">
                <p>收益记录</p>
                <i class="arr-right"></i>
            </div>
        </a>
    </div>
    <div class="ps-lt">
        <a href="index.php?c=earning&a=record&tip=1">
        <div class="lt-dsb cl-bb">
            <p>交易记录</p>
            <i class="arr-right"></i>
        </div>
        </a>
    </div>
</section>
<section class="mt-1" >

    <div class="ps-lt" style="background-color: #f2f2f2;">

        <div class="lt-dsb cl-bb" style="height: 35px;padding-top: 10px;padding-left: 25%;padding-bottom: 10px;">
       
 <button class="layui-btn layui-btn-primary" >提现</button>
 <!-- <div style="width: 5%"></div> -->
 <button class="layui-btn layui-btn-normal">充值</button>

            <!-- <p>申请加入更多的计划<br>123</p>
            <i class="arr-right"></i>
 -->        </div>
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