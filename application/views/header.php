
<header  class='navbar navbar-fixed-top' id='main-navbar' role='banner' style="background: #fff">
	<div class="container">
		<div class="row">
			<div id="header" class="col-md-10 col-md-offset-1">
				<!-- logo -->
				<a href="index.php" class="col-md-5 col-sm-5">
					<img src="img/header-logo.png" alt="" class="">
				</a>
				<!-- 按钮 -->
				<button type="button" class="navbar-toggle navbar-default collapsed" data-toggle="collapse" data-target="">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- 电话 -->
				<div id="tel" class="col-md-4">
					<a href="tel:0451-55157643" ><i class="fa fa-phone"></i> 咨询电话：0451-55157643</a>
					
				</div>
				<!-- 中英文 -->
				<div id="change" class="col-md-3 col-sm-4">
					<a ng-click="changeLanguage('chn')" href="javascript:;" translate="BUTTON_LANG_CHN">中文</a> |
					<a ng-click="changeLanguage('en')" href="javascript:;" translate="BUTTON_LANG_EN" >ENGLISH</a>
				</div>

				<!-- <div id="change" class="col-md-2 col-sm-3 col-xs-5">
					<a ng-click="changeLanguage('chn')" href="javascript:;" translate="BUTTON_LANG_CHN">中文</a> |
					<a ng-click="changeLanguage('en')" href="javascript:;" translate="BUTTON_LANG_EN">English</a>
				</div> -->


				
			</div>

		</div>
	</div>
	<!-- 导航栏 -->
<div id="nav" class="{{'BG_COLOR' | translate }}">
	<div class="container">
		<div class="row">
		    <ul class="navigation col-md-10 col-md-offset-1">
		        <li><a href="welcome/index" ng-bind="'NAV.item1' | translate"></a></li>
		        <li><a href="welcome/intro" ng-bind="'NAV.item2' | translate"></a></li>
		        <li><a href="welcome/course" ng-bind="'NAV.item3' | translate"></a></li>
		        <li><a href="welcome/team" ng-bind="'NAV.item4' | translate"></a></li>
		        <li><a href="welcome/job" ng-bind="'NAV.item5' | translate"></a></li>
		        <li><a href="welcome/question" ng-bind="'NAV.item6' | translate"></a></li>
		        <li><a href="welcome/contact" ng-bind="'NAV.item7' | translate"></a></li>
		        <li><a href="welcome/news" ng-bind="'NAV.item8' | translate"></a></li>
		    </ul>  
		</div>
	</div>	
</div>

</header>




<header id="mobile-nav" class="navbar navbar-fixed-top" id='main-navbar' role='banner'>
    <div>
      <div class="navbar-header {{'BG_COLOR' | translate }}">
		<img src="img/mobile.png" alt="" style="width:214px;height:48px;">
        <button type="button" class="navbar-toggle navbar-default collapsed" data-toggle="collapse" data-target=".navbar-collapse">
	          <span class="icon-bar {{'BG_COLOR' | translate }}"></span>
	          <span class="icon-bar {{'BG_COLOR' | translate }}"></span>
	          <span class="icon-bar {{'BG_COLOR' | translate }}"></span>
        </button>
        
      </div>
      <nav class="collapse navbar-collapse {{'BG_COLOR' | translate }}" role='navigation'>
        <ul class='nav navbar-nav navbar-left'>
          

	        <li><a class="link" href="welcome/index" ng-bind="'NAV.item1' | translate"></a></li>
	        <li><a class="link" href="welcome/intro" ng-bind="'NAV.item2' | translate"></a></li>
	        <li><a class="link" href="welcome/course" ng-bind="'NAV.item3' | translate"></a></li>
	        <li><a class="link" href="welcome/team" ng-bind="'NAV.item4' | translate"></a></li>
	        <li><a class="link" href="welcome/job" ng-bind="'NAV.item5' | translate"></a></li>
	        <li><a class="link" href="welcome/question" ng-bind="'NAV.item6' | translate"></a></li>
	        <li><a class="link" href="welcome/contact" ng-bind="'NAV.item7' | translate"></a></li>
	        <li><a class="link" href="welcome/news" ng-bind="'NAV.item8' | translate"></a></li>
	        

          <li ng-click="changeLanguage('chn')" ><a class="lang-btn link"  href="javascript:;" translate="BUTTON_LANG_CHN">中 文</a></li>
         
          <li ng-click="changeLanguage('en')"><a class="lang-btn link"  href="javascript:;"  translate="BUTTON_LANG_EN">ENGLISH</a></li>

          <li><a class="lang-btn link" href="tel:0451-55157643"><i class="fa fa-phone"></i> 咨询电话：0451-55157643</a></li>
          

        </ul>

       
      </nav>
    </div>
</header>













<script src="js/angular-1.5.5.js"></script>
<script src="js/angular-cookies.js"></script>
<script src="js/angular-translate.min.js"></script>
<script src="js/angular-translate-storage-cookie.js"></script>
<script src="js/angular-translate-storage-local.js"></script>
<?php include 'i18n.php' ?>


