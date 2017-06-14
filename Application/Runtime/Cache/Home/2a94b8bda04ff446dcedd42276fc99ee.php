<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/favicon.ico" type="image/x-icon"  rel="shortcut icon">
    <title>个人中心</title>
    <link rel="stylesheet" type="text/css" href="Public/css/style.css">
    <link rel="stylesheet" href="Public/css/layui.css"  media="all">

</head>

<body>

<div id="_centent">
    <!-- <header>

        <div class="top-name"><p>收益项目</p></div>
    </header> -->


    <div style="position: relative; width: 100%; height: 210px;">
        <img src="Public/images/index2.jpg" width="100%" height="200px;" alt="">
        <span style="color: white; position: absolute; top: 0; left: 0;padding-left: 36%;padding-top: 65px;font-size: 15px;text-align: center;">
            <span style="font-size: 14px;color: #fff">今天已学习人数</span><br>
            <span style="font-size: 16px;color: #F7B824"><?php echo ($all_learn); ?></span><br>
            <sapn style="font-size: 14px;color: #fff">您已学习</sapn><br>
            <span style="font-size: 16px;color: #F7B824"><?php echo ($learn_day); ?>天</span></span>
    </div>

        <section class="mt-1">
            <div class="ps-lt" style="background-color: #f2f2f2;height: 55px;width: 100%;">
                <div class="lt-dsb" style="height: 20px;background-color: #f2f2f2;">
                    <p><?php echo ($num); ?>人已加入</p>
                </div>
                <div class="" style="width:100%;height: 35px;background-color: white;" >
                    <p>
                        <?php if(is_array($photo_list)): $i = 0; $__LIST__ = $photo_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$photo): $mod = ($i % 2 );++$i;?><img style="margin:auto;margin-top: 5px; width:30px;height:30px;border-radius:100px;" src="<?php echo ($photo["photo"]); ?>" width="30px" height="30px">
                        <!--<img style="margin:auto;margin-top: 5px; width:30px;height:30px;border-radius:100px;" src="Public/images/head-img.png" width="30px" height="30px">--><?php endforeach; endif; else: echo "" ;endif; ?>
                    </p>

                </div>
            </div>
        </section>


        <section class="mt-1" >

            <div class="ps-lt" style="background-color: #eeeeee;">

                <div class="lt-dsb cl-bb" style="height: 35px;width:100%;padding-top: 8%;">
                    <div style="height: 35px;width: 50%;float: left" align="center">
                    <button style="" class="layui-btn layui-btn-normal" ><a href="index.php?c=index&a=progress">学习进度</a></button>
                    </div>
                        <!-- <div style="width: 5%"></div> -->
                    <div style="height: 35px;width: 50%;float: left" align="center">
                    <button  style="" class="layui-btn layui-btn-warm"><a href="index.php?c=index&a=early_check">早起签到</a></button>
                    </div>
                    <!-- <p>申请加入更多的计划<br>123</p>
                    <i class="arr-right"></i>
         -->        </div>
            </div>
        </section>
        <section class="mt-1">
            <div class="ps-lt" style="background-color: #eeeeee;">
                <div class="" style="color: white;height: 35px;width:100%;padding-top: 8%;" >
                    <div style="height: 35px;width: 33%;float: left" align="center">
                    <button class="layui-btn layui-btn-radius layui-btn-danger">
                        <a href="index.php?c=plan&a=note&tip=2">生词本</a>
                    </button>
                    </div>
                        <div style="height: 35px;width: 33%;float: left" align="center">
                    <button class="layui-btn layui-btn-radius layui-btn-warm">
                        <a href="index.php?c=plan&a=note&tip=1">单词本</a>
                    </button>
                        </div>
                            <div style="height: 35px;width: 33%;float: left" align="center">
                    <button class="layui-btn layui-btn-radius layui-btn-normal">
                        <a href="index.php?c=plan&a=notebook">笔记本</a>
                    </button>
                            </div>
                </div>
            </div>
        </section>
        <!--<section class="mt-1">-->
            <!--<div class="ps-lt" style="background-color: #f2f2f2;">-->
                <!--<div class="" style="color: white;" >-->
                    <!--<div class="yuan" style="padding-top: 10px;-->
<!--margin:auto;margin-top: 10px; width:50px;height:40px;border-radius:100px;-->
<!--background-color:#FF5722;border-style: solid;border-color: blue;-->
<!--text-align: center; font-size: 12px;float: left; margin-left: 25%;-->
    <!--">单词本</div>-->
                    <!--<div class="yuan" style="padding-top: 10px;-->
<!--margin:auto;margin-top: 10px; width:50px;height:40px;border-radius:100px;-->
<!--background-color:#F7B824;border-style: solid;border-color: blue;-->
<!--text-align: center; font-size: 12px; float: left;-->
<!--margin-left: 10%;-->
    <!--">生词本</div>-->
                    <!--<div class="yuan" style="padding-top: 10px;-->
<!--margin:auto;margin-top: 10px; width:50px;height:40px;border-radius:100px;-->
<!--background-color:#009688;border-style: solid;border-color: blue;-->
 <!--text-align: center; font-size: 12px; float: right;-->
<!--margin-left: 10%;-->
    <!--">笔记本</div>-->
                    <!--&lt;!&ndash; <p>申请加入更多的计划</p>-->
                    <!--<i class="arr-right"></i> &ndash;&gt;-->
                <!--</div>-->
            <!--</div>-->
        <!--</section>-->

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