<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>McGins English后台管理</title>
  <base href="<?php echo site_url();?>">
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<?php include 'admin-header.php'; ?>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <?php include 'admin-sidebar.php'; ?>
  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong></div>
      </div>
      <!-- 文本域 -->
        <div class="am-form-group">
          <label for="doc-ta-1">教师福利：</label>
          <textarea class="" rows="10" cols="90" id="doc-ta-1">
            <?php 
                foreach($jobInfo as $job){
                    echo $job -> job_welfare ;
                }
            ?> 
          </textarea>
        </div>    
        <div class="am-form-group">
          <label for="doc-ta-1">教师要求&nbsp;&nbsp;&nbsp;&nbsp;：</label>
          <textarea class="" rows="10" cols="90" id="doc-ta-1">
            <?php 
                foreach($jobInfo as $job){
                    echo $job -> job_teacher_recruit ;
                }
            ?> 
          </textarea>
        </div>   
        <div class="am-form-group">
          <label for="doc-ta-1">教师任职资格&nbsp;&nbsp;：</label>
          <textarea class="" rows="10" cols="90" id="doc-ta-1">
            <?php 
                foreach($jobInfo as $job){
                    echo $job -> job_teacher_qualifications ;
                }
            ?> 
          </textarea>
        </div>  
        <div class="am-form-group">
          <label for="doc-ta-1">学习顾问要求&nbsp;&nbsp;：</label>
          <textarea class="" rows="10" cols="90" id="doc-ta-1">
            <?php 
                foreach($jobInfo as $job){
                    echo $job -> job_advisor_study ;
                }
            ?> 
          </textarea>
        </div>   
        <div class="am-form-group">
          <label for="doc-ta-1">学习顾问任职资格：</label>
          <textarea class="" rows="10" cols="90" id="doc-ta-1">
            <?php 
                foreach($jobInfo as $job){
                    echo $job -> job_advisor_qualifications ;
                }
            ?> 
          </textarea>
        </div>    
    
    </div>

    <?php include 'admin-footer.php' ;?>
  </div>
  <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
