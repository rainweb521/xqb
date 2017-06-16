<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>设置</title>

</head>
<body>
<div class="loading"><img src="Public/images/ajax-loader.gif"/></div>
<div data-role="page" class="touzi set" id="set">
    <!--jqmb需要把所以东西放在page div内-->
    <link rel="stylesheet" href="Public/css/jquery.mobile-1.4.5.min.css"/>
    <link rel="stylesheet" href="Public/css/style4.css"/>

    <!--jqmb需要把所以东西放在page div内-->
    <header data-role="header" data-position="fixed">
        <a href="index.php?c=setting" data-rel="back" class="ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon"  data-ajax="false">返回</a>
        <h3>设置</h3>
    </header>
    <div class="ui-content" data-role="content" >
        <dl>
            <dd>
                <a href="index.php?c=setting&a=update_self"  data-ajax="false" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon" >修改资料<small>***</small></a>
            </dd>
            <dd>
                <a href="" data-ajax="false" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon">验证邮箱<small>***</small></a>
            </dd>

            <dd>
                <a href="" data-ajax="false" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon">微信认证<small>***</small></a>
            </dd>
        </dl>
        <dl>
            <dd>
                <a href="" data-ajax="false" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon">交易密码</a>
            </dd>
            <!-- <dd>
                <a href="set-pass.html" data-ajax="false" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon">修改登录密码</a>
            </dd> -->
            <dd>
                <a href="set-shou.html" data-ajax="false" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon">修改登录密码</a>
            </dd>
        </dl>
        <dl>
            <!-- <dd>
                <a href="set-yijian.html" data-ajax="false" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon">意见反馈</a>
            </dd> -->
            <dd>
                <a href="" data-ajax="false" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon">常见问题</a>
            </dd>
            <dd>
                <a href="#" data-ajax="false" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon">关于我们</a>
            </dd>
        </dl>
    </div>
    <footer  data-position="fixed" data-role="footer">
        <a data-role="none" href="index.php?c=login&a=logout" class="outset" style="background-color: #FF5722;color: #fff;">退出登录</a>
    </footer>
    <script src="Public/js/jquery.min.js"></script>
    <script src="Public/js/jquery.mobile-1.4.5.min.js"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $(".loading").fadeOut();

        })
    </script>
</div>

</body>
</html>