<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>大转盘活动</title>
    <link rel="stylesheet" href="Public/css/bootstrap3/css/bootstrap.min.css">
    <link rel="stylesheet" href="Public/css/style5.css">
</head>
<body>
<div style="width: 100%;height: 50px;background-color: #009DD9;
padding-top: 10px;">
    <div style="color: black;float: left;width: 40%;padding-left: 10px;" align="left;"><a href="index.php?c=setting">退出</a></div><div style="color: white;font-size: 20px; text-align: left;float: left;width: 60%;" align="left"><storng>兑奖记录</storng></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 clearPadding">
            <div class="plr10 pb10">
                <div class="ptitle">
                    <strong>我的中奖纪录</strong>
                    <div class="pull-right font14">累计<span class="text-red">0</span>次</div>
                </div>
                <div class="pline"></div>
                <div class="prizebox pt10">
                    <div class="prizelist">
                        <!--<div class="clearfix pb10">-->
                            <!--<div class="col-xs-8 clearPadding">恒大矿泉水一瓶</div>-->
                            <!--<div class="col-xs-4 clearPadding text-right">18:55:30</div>-->
                        <!--</div>-->
                        <!--<div class="clearfix pb10">-->
                            <!--<div class="col-xs-8 clearPadding">恒大矿泉水一瓶</div>-->
                            <!--<div class="col-xs-4 clearPadding text-right">18:55:30</div>-->
                        <!--</div>-->
                        <!--<div class="clearfix pb10">-->
                            <!--<div class="col-xs-8 clearPadding">恒大矿泉水一瓶</div>-->
                            <!--<div class="col-xs-4 clearPadding text-right">18:55:30</div>-->
                        <!--</div>-->
                    </div>
                    <div class="text-center pb10">查看更多</div>
                </div>
            </div>
            <div class="turRule">
                <div class="clearfix text-brown">
                    <div class="col-xs-4 clearPadding" style="position:relative;"><span class="ball ball1"></span><div class="line"></div></div>
                    <div class="col-xs-4 clearPadding text-center font16">活动规则</div>
                    <div class="col-xs-4 clearPadding" style="position:relative;"><div class="line"></div><span class="ball ball2"></span></div>
                </div>
                <div class="mt10">
                    <dl>
                        <dt><span class="">1</span><strong>奖品有效期</strong></dt>
                        <dd>所中奖品会在七日后失效</dd>
                    </dl>
                    <dl>
                        <dt><span class="">2</span><strong>领奖规则</strong></dt>
                        <dd>点击奖品活动按钮，方可领取奖励。</dd>
                    </dl>
                    <dl>
                        <dt><span class="">3</span><strong>活动声明</strong></dt>
                        <dd>本活动最终解释权归学钱帮所有</dd>
                    </dl>
                </div>
            </div>
            <div class="plr15 clearPadding">
                <div class="col-xs-6 text-center"><button class="btn btn-block text-white" style="background:#06b16a;">领奖品</button></div>
                <div class="col-xs-6 text-center"><button class="btn btn-block text-white" style="background:#faca34;">返回</button></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>