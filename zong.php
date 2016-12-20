<?php
require_once "jssdk.php";
// appId  和 秘钥
$jssdk = new JSSDK("wx57bad217c997d206", "47400dbd66ed693b85de20393d2064db");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>首页</title>
		<link rel="stylesheet" href="首页.css" />
		<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
		<link rel="stylesheet" href="modules/homePage/swiper.min.css" />
		<meta name="viewport" content="width=414,maximum-scale=5,user-scalable=no"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<script type="text/javascript" src="js/baiduTemplate.js" ></script>
		<script data-main = "app.js" type="text/javascript" src = "js/require.js"></script>
		<script>
			(function (doc, win) {
 			 var docEl = doc.documentElement,
				    resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
				    recalc = function () {
				      var clientWidth = docEl.clientWidth;
				      if (!clientWidth) return;
				      docEl.style.fontSize = 100 * (clientWidth / 414) + 'px';
				    };
				  if (!doc.addEventListener) return;
				  win.addEventListener(resizeEvt, recalc, false);
				  doc.addEventListener('DOMContentLoaded', recalc, false);
				})(document, window);
		</script>
	</head>
	<body>
		
		<!-- <main>
			<div class = "home"></div>
			<div class = "market"></div>
			<div class = "order"></div>
			<div class = "mine"></div>
		</main>
		<footer>
			<div class="myfooter">
				<a href="#home"><figure>
					<img src="img/shouye.png" alt="" />
					<figcaption>
						<p>首页</p>
					</figcaption>
				</figure></a>
			</div>
			<div class="myfooter">
				<a href="#market"><figure>
					<img src="img/chaoshi.png" alt="" />
					<figcaption>
						<p>闪送超市</p>
					</figcaption>
				</figure></a>
			</div>
			<div class="myfooter">
				<a href="#order"><figure>
					<img src="img/gouwu.png" alt="" />
					<span></span>
					<figcaption>
						
						<p>购物车</p>
					</figcaption>
				</figure></a>
			</div>
			<div class="myfooter">
				<a href="#mine"><figure>
					<img src="img/my.png" alt="" />
					<figcaption>
						<p>我的</p>
					</figcaption>
				</figure></a>
			</div>
		</footer> -->
		<button onclick="f1()">获取地理位置</button>
		<button onclick="f2()">插卡当前位置</button>

		
	</body>
<script type="text/javascript">
 wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
     jsApiList: [
        'checkJsApi',
        'onMenuShareWeibo',
        'onMenuShareQZone',
        'hideMenuItems',
        'showMenuItems',
        'hideAllNonBaseMenuItem',
        'showAllNonBaseMenuItem',
        'translateVoice',
        'startRecord',
        'stopRecord',
        'onVoiceRecordEnd',
        'playVoice',
        'onVoicePlayEnd',
        'pauseVoice',
        'stopVoice',
        'uploadVoice',
        'downloadVoice',
        'chooseImage',
        'previewImage',
        'uploadImage',
        'downloadImage',
        'getNetworkType',
        'openLocation',
        'getLocation',
        'hideOptionMenu',
        'showOptionMenu',
        'closeWindow',
        'scanQRCode',
        'chooseWXPay',
        'openProductSpecificView',
        'addCard',
        'chooseCard',
        'openCard'
      ]
  });
 	function f1(){
 		wx.getLocation({
    type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'
    success: function (res) {
        var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
        var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
        var speed = res.speed; // 速度，以米/每秒计
        var accuracy = res.accuracy; // 位置精度
    }
});
 	}
 	function f2(){
 		wx.openLocation({
    latitude: 0, // 纬度，浮点数，范围为90 ~ -90
    longitude: 0, // 经度，浮点数，范围为180 ~ -180。
    name: '', // 位置名
    address: '', // 地址详情说明
    scale: 1, // 地图缩放级别,整形值,范围从1~28。默认为最大
    infoUrl: '' // 在查看位置界面底部显示的超链接,可点击跳转
});
 	}
 	
</script>
</html>
