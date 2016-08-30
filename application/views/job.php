<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>招贤纳士</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/job.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
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
			<img src="img/recruit.jpg" alt="" class="center-block">
			<div class="info col-md-10 col-md-offset-1">
				<p>麦金思青少儿英语是一家由美国TESL专家团队打造的英语教育机构。我们致力于培养中国青少年儿童英语实际运用能力与应试能力双提升，给孩子们带来最纯正的美国教育理念+最适合中国青少儿的英语教学模式。学习顾问是麦金思最重要的角色，他们代表着麦金思的形象、专业和服务。我们期待优秀的你，认可麦金思，与我们共同成长、共同发展，充实自己的职业生涯。加入我们，让麦金思为你增添幸福感，实现自我价值！
				</p>
				<div class="detail">
					我们为您提供：
					<ul>
					<?php 
					foreach($jobInfo as $job){
					?>
						<li><?php echo $job -> job_welfare ?></li>
					<?php
					}
					?>
					</ul>
				</div>
			</div>
			<div class="recruit-teacher">
				<img src="img/recruit-teacher.jpg" alt="">
				<div class="require col-md-10 col-md-offset-1">
					岗位要求：
					<ul>
					<?php 
					foreach($jobInfo as $job){
					?>
						<li><?php echo $job -> job_teacher_recruit ?></li>
					<?php
					}
					?>
					</ul>
				</div>
				<div class="qualifications col-md-10 col-md-offset-1">
					任职资格：
					<ul>
					<?php 
					foreach($jobInfo as $job){
					?>
						<li><?php echo $job -> job_teacher_qualifications ?></li>
					<?php
					}
					?>
					</ul>

				</div>
			</div>
			<div class="study-advisor">
				<img src="img/study-advisor.jpg" alt="">
				<div class="require col-md-10 col-md-offset-1">
					岗位职责：
					<ul>
					<?php 
					foreach($jobInfo as $job){
					?>
						<li><?php echo $job -> job_advisor_study ?></li>
					<?php
					}
					?>
					</ul>
				</div>
				<div class="qualifications col-md-10 col-md-offset-1">
					任职要求：
					<ul>
					<?php 
					foreach($jobInfo as $job){
					?>
						<li><?php echo $job -> job_advisor_qualifications ?></li>
					<?php
					}
					?>
					</ul>
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

