<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>team</title>
		<base href="<?php echo site_url();?>">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/team.css">
	</head>
	<body>
		<!-- 头部 -->
		<?php include 'header.php'; ?>
		<!-- 头部结束 -->
		<div class="container">
			<div class="row">
				<img src="img/news.jpg" class="img-responsive  col-md-10 col-md-offset-1" style="padding:0;margin-top: 160px;" alt="">
				<div id="intro" class="col-md-10 col-md-offset-1">团队介绍</div>
			</div>
			<div class="row member">
				<div class="col-md-10 item col-md-offset-1">
					<?php
						foreach ($member as $member) {
					?>
					<div class="col-md-6 item">
						<img src="img/<?php   echo $member -> img;?>" class=" img-responsive col-md-6 " alt="">
						<div class="content col-md-6">
							<h4><?php   echo $member -> type;?></h4>
							<h4><?php   echo $member -> name;?></h4>
							<h5>自我介绍：</h5>
							<p><?php   echo $member -> desc;?></p>
						</div>
					</div>
					<?php
					}
					;?>
				</div>
				
			</div>
			<div class="row member">
				
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