<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>artive</title>
		<base href="<?php echo site_url();?>">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/article.css">
	</head>
	<body>
		<!-- 头部 -->
		<?php include 'header.php'; ?>
		<!-- 头部结束 -->
		<div class="container">
			<div class="row">
				<img src="img/write.jpg" id="write" class="img-responsive  col-md-10 col-md-offset-1" alt="">

				
			</div>
			<div class="row">
				<h3 class="col-md-7 col-md-offset-1 text-center"><?php  echo $activity -> activity_title;?></h3>
				<div id="pink" class="col-md-3"></div>
			</div>
			<div class="row" style="margin-bottom: 50px;">
				<h4 class="col-md-7 col-md-offset-1 text-center">发布日期：<?php  echo $activity -> add_time;?></h4>
				<div class="content col-md-7 col-md-offset-1">
					<?php  echo $activity -> activity_content;?>
				</div>
				
				<div id="active" class="col-md-3">
					<a href="#"><img src="img/sea.jpg" class="col-md-12" alt=""></a>
					<a href="#"><img src="img/cloud.jpg" class="col-md-12" alt=""></a>
				</div>
				
			</div>
		</div>
<!-- 尾部 -->
<?php include 'footer.php' ?>
<!-- 尾部结束 -->
			<script src="js/jquery-1.11.3.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.goup.min.js"></script>
			<script src="js/style.js"></script>
		</body>
	</html>