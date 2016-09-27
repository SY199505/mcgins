<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>招聘信息</title>
	<base href="<?php echo site_url();?>">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/job.css">
	<style>

	</style>
</head>
<body ng-controller="myCtrl">
<!-- 头部 -->
<?php include 'header.php'; ?>
<!-- 头部结束 -->
<div class="container">
	<div class="row">
		<div id="content" class="col-md-10 col-md-offset-1">
			<img src="img/recruit.jpg" alt="" class="center-block">
			<div class="info col-md-10 col-md-offset-1">
				<p>麦金思青少儿英语是一家由美国TESL专家团队打造的英语教育机构。我们致力于培养中国青少年儿童英语实际运用能力与应试能力双提升，给孩子们带来最纯正的美国教育理念+最适合中国青少儿的英语教学模式。学习顾问是麦金思最重要的角色，他们代表着麦金思的形象、专业和服务。我们期待优秀的你，认可麦金思，与我们共同成长、共同发展，充实自己的职业生涯。加入我们，让麦金思为你增添幸福感，实现自我价值！
				</p>
			</div>
			<div class="recruit-teacher">
				<div class="require col-md-10 col-md-offset-1">
					<?php
					foreach($jobInfo as $job){
					?>
						<h3><?php echo $job -> job_title; ?></h3>
						<p><?php echo $job -> job_content; ?></p>
					<?php
					}
					?>
			</div>
			</div>
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
</body>
</html>

