<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>麦金思课程体系</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/course.css">
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
		<div id="content">
			<div class="title text-center">
				<h1>麦金思课程体系</h1>
				<span>Curriculum System</span>
				<p>麦金思青少儿英语的EAGR课程体系为</p>
				<p>不同年龄段、不同需求的孩子提供了相应的主课程、专项课、阅读训练、文化体验等。</p>
			</div>
			<!-- 课程安排 -->
			<div id="course-plan" class="text-center">
				<p class="title">麦金思专业的学习顾问和老师会根据孩子的实际情况酌情安排最合适的学习规划。</p>
				<img src="img/learn-plan.jpg" alt="" class="center-block img-responsive">
				<table class="col-md-10 col-md-offset-1">
					<thead class="">
						<tr>
							<td class="col-md-2">麦金思课程级别Levels</td>
							<?php 
							foreach ($courseInfo as $course){
							?>
							<td class="col-md-2"><?php echo $course -> levels ?></td>
							<?php
							}
							?>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>适合年龄段Age</td>
							<?php 
							foreach ($courseInfo as $course){
							?>
							<td><?php echo $course -> age ?></td>
							<?php
							}
							?>
						</tr>
						<tr>
							<td>课程配置Courses</td>
							<?php 
							foreach ($courseInfo as $course){
							?>
							<td><?php echo $course -> courses ?></td>
							<?php
							}
							?>
						</tr>
						<tr>
							<td>课程介绍Introduction</td>
							<?php 
							foreach ($courseInfo as $course){
							?>
							<td>
								<p><?php echo $course -> intro ?></p>
							</td>
							<?php
							}
							?>
						</tr>
					</tbody>
					
				</table>	
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

