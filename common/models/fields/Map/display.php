<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>

    <!-- http://lbsyun.baidu.com/jsdemo.htm?a#a1_2 -->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?= $aryUISetting['api_key'] ?>"></script>

    <style>
        #allmap {width: <?= $aryUISetting['width'] ?>;height:  <?= $aryUISetting['height'] ?>;overflow: hidden;margin:0;font-family:"微软雅黑";}
    </style>
    <div id="allmap"></div>

    <script type="text/javascript">
        // 百度地图API功能
        var map = new BMap.Map("allmap");    // 创建Map实例
        map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);  // 初始化地图,设置中心点坐标和地图级别
        map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
        map.setCurrentCity("<?= $aryUISetting['defaultcity'] ?>");          // 设置地图显示的城市 此项是必须设置的
        map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
    </script>