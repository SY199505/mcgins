<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>麦金思少儿英语</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<style>

	</style>
</head>
<body>
<!-- 头部 -->
<?php include 'header.php'; ?>
<!-- 头部结束 -->

<img src="img/bg.jpg" class="img-responsive bg" alt="">
<div id="carousel">
	<div class="container main-carousel">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
					</ol>

					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/banner1.jpg" alt="...">
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item">
							<img src="img/banner2.jpg" alt="...">
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item">
							<img src="img/banner3.jpg" alt="...">
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item">
							<img src="img/banner4.jpg" alt="...">
							<div class="carousel-caption">
							</div>
						</div>
					</div>

					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span aria-hidden="true"><i class="fa fa-angle-left carousel-direction"></i></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span aria-hidden="true"><i class="fa fa-angle-right carousel-direction"></i></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>			
		</div>
	</div>
	
</div>
<!-- 主体 -->
<div class="container">
    <div class="row">
        <div id="content" class="col-md-10 col-md-offset-1">
            <div class="feature col-md-12 col-sm-12">
                <div class="title">
                    <h1 class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 text-center">麦金思特色教育</h1>
                    <p class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">McGins English Education Feature</p>
                </div>
                <ul>
					<?php $i = 0; 
						foreach($indexInfo as $index){
					?>                
                    <li class="col-md-3 col-sm-6 col-xs-12">
                        <img src="img/icon<?php echo $index -> index_id ?>.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center"><?php echo $index -> index_ch; ?></h2>
                        <p><?php echo $index -> index_feature?></p>
                    </li>
                    <?php
                    	}
                    ?>                    
                </ul>
            </div>              
        </div>

    </div>
</div>
<!-- 尾部 -->
<?php include 'footer.php'; ?>
<!-- 尾部结束 -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.goup.min.js"></script>
<script src="js/style.js"></script>
</body>
</html>

