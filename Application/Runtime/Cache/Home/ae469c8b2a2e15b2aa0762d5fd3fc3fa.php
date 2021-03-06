<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>单词学习</title>

</head>
<body onload="validate()">
<div class="loading"><img src="Public/images/ajax-loader.gif"/></div>
<div data-role="page" class="touzi set" id="set">
    <!--jqmb需要把所以东西放在page div内-->
    <link rel="stylesheet" href="Public/css/jquery.mobile-1.4.5.min.css"/>
    <link rel="stylesheet" href="Public/css/style4.css"/>
    <script type="text/javascript" src="Public/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="Public/js/echarts.min.js"></script>
    <script type="text/javascript">

    </script>
    <!--jqmb需要把所以东西放在page div内-->
    <header data-role="header" data-position="fixed">
        <a href="index.php?c=index"  class="ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon"  data-ajax="false">退出</a>
        <h3>学习进度</h3>
    </header>
    <div align="center">这是学习的折线图</div>
    <div id="main" style="width: 100%;height:300px;"></div>
    <br>
    <div align="center">这是学习的柱状图</div>
    <div id="main2" style="width: 100%;height:300px;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例

        var myChart = echarts.init(document.getElementById('main'));

        // 指定图表的配置项和数据
        option = {
            title: {
                text: ''
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data:['四级','六级','词组']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            toolbox: {
                feature: {
                    saveAsImage: {}
                }
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['周一','周二','周三','周四','周五','周六','周日']
            },
            yAxis: {
                type: 'value'
            },
            series: [
                {
                    name:'四级',
                    type:'line',
                    stack: '总量',
                    data:[120, 132, 101, 134, 90, 230, 210]
                },
                {
                    name:'六级',
                    type:'line',
                    stack: '总量',
                    data:[220, 182, 191, 234, 290, 330, 310]
                },
                {
                    name:'词组',
                    type:'line',
                    stack: '总量',
                    data:[150, 232, 201, 154, 190, 330, 410]
                },
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        var myChart = echarts.init(document.getElementById('main2'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: ''
            },
            tooltip: {},
            legend: {
                data:['单词']
            },
            xAxis: {
                data: ["周一","周二","周三","周四","周五","周六","周日"]
            },
            yAxis: {},
            series: [{
                name: '单词',
                type: 'bar',
                data: [5, 20, 36, 10, 10, 20, 30]
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
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