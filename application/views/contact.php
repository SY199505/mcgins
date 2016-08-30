<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>联系我们</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contact.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=5dEsfUlwMV0GdHlxoqgvlxE0"></script> 
	<style>

	</style>
</head>
<body>
<!-- 头部 -->
<?php include 'header.php'; ?>
<!-- 头部结束 -->
<div class="container">
	<div class="row">
		<div id="content" class="col-md-10 col-md-offset-1">
			<div class="info col-md-6" >
				<div class="title text-center">联系我们</div>
				<ul>
                    <li><a href="tel:13809764375">电话 Telephone: <?php foreach($contactInfo as $key=>$value) {echo $value -> webinfo_tel;}?></a></li>
                    <li><a href="">微信 WeChat: <?php foreach($contactInfo as $key=>$value) {echo $value -> webinfo_wechat;}?></a></li>
					<li><a href="mailto:09162839876@qq.com">邮箱 Email: <?php foreach($contactInfo as $key=>$value) {echo $value -> webinfo_mail;}?></a></li>
                    <li><a href="www.mcgins.com">网址 Website: <?php foreach($contactInfo as $key=>$value) {echo $value -> webinfo_website;}?></a></li>
                    地址：
					<li>
					<?php foreach($contactInfo as $key=>$value) {echo $value -> webinfo_addr;}?></li>
				</ul>
			</div>
			<div id="allmap" class="col-md-6 img-responsive"></div>
		</div>
	</div>
</div>
<!-- 尾部 -->
<?php include 'footer.php' ?>
<!-- 尾部结束 -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.goup.min.js"></script>
	<script src="js/style.js"></script>
	<script src="http://api.map.baidu.com/api?v=2.0&ak=AMt1vrxwTqGzf1I94PMx7K0u" type="text/javascript"></script>
<script type="text/javascript">
  // 百度地图API功能
  var map = new BMap.Map("allmap");
  var point = new BMap.Point(126.600002,45.691483);
  map.centerAndZoom(point, 18);
  var marker = new BMap.Marker(point);  // 创建标注
  map.addOverlay(marker);               // 将标注添加到地图中
  marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
  map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
  //map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
  map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
</script>
</body>
</html>

