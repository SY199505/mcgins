<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>news</title>
		<base href="<?php echo site_url();?>">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/news.css">
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
				<div class="col-md-7 col-md-offset-1" style="padding:0;">
					<div id="share-pic" ></div>
					<ul id="share" >
					<?php 
						$i = 0;
						foreach($activityInfo as $activity){
					?>

						<li>
							<a href="welcome/article/<?php  echo $activity -> activity_id;?>"><img src="img/<?php  echo $activity -> activity_img;?>" class="img-responsive col-md-4" alt="">
								<div class="col-md-8">
									<h4><?php  echo $activity -> activity_title;?></h4>
									<p><?php  echo $activity -> activity_desc;?></p>
								</div>
							</a>
						</li>

					<?php 
						}
					;?>
					</ul>
				</div>
				<div class="col-md-3" style="padding:0;">
					<div id="active-pic"></div>
					<div id="active">
						<a href="welcome/news"><img src="img/sea.jpg" class="col-md-12" alt=""></a>
						<a href="welcome/news"><img src="img/cloud.jpg" class="col-md-12" alt=""></a>
					</div>
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