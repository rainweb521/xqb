<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>学钱帮</title>

</head>
<body>
<script type="text/javascript">
    function form_submit(){
        document.getElementById('myForm').action = "index.php?c=setting&a=upfile";
        document.getElementById("myForm").submit();
    }
</script>
<div class="loading"><img src="Public/images/ajax-loader.gif"/></div>
<div data-role="page" class="touzi phone" id=et-phone">
    <!--jqmb需要把所以东西放在page div内-->
    <link rel="stylesheet" href="Public/css/jquery.mobile-1.4.5.min.css"/>
    <link rel="stylesheet" href="Public/css/style4.css"/>

    <!--jqmb需要把所以东西放在page div内-->
    <header data-role="header" data-position="fixed">
        <a href="index.php?c=setting" data-rel="back" class="ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon" data-transition="slide" data-direction="revserse">返回</a>
        <h3>修改资料</h3>
    </header>
    <div class="ui-content" data-role="content">
        <form action="index.php?c=setting&a=update_self" method="post">
            <input type="hidden" value="1" name="flag">
            <ul>
                <li>
                    <label>用户名：</label>
                    <input type="text" name="username" placeholder="<?php echo ($user["username"]); ?>" data-role="none"/>
                </li>

                <li>
                    <label>手机号：</label>
                    <input type="text" name="mobile" placeholder="<?php echo ($user["mobile"]); ?>" data-role="none"/>
                </li>
                <li>
                    <label>邮箱地址：</label>
                    <input type="text" name="email" placeholder="<?php echo ($user["email"]); ?>" data-role="none"/>
                </li>
            </ul>
            <input type="submit"  value="确认修改" data-role="none"/>
        </form>
    </div>
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