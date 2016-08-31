
<header class='navbar navbar-fixed-top' id='main-navbar' role='banner' style="background: #fff">
	<div class="container">
		<div class="row">
			<div id="header" class="col-md-10 col-md-offset-1">
				<!-- logo -->
				<a href="index.html" class="col-md-5 col-sm-5">
					<img src="img/header-logo.png" alt="" class="">
				</a>
				<!-- 按钮 -->
				<button type="button" class="navbar-toggle navbar-default collapsed" data-toggle="collapse" data-target="">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- 电话 -->
				<div id="tel" class="col-md-5 col-sm-4 col-xs-7">
					<a href="tel:0451-55157643" >咨询电话：0451-55157643</a>
					
				</div>
				<!-- 中英文 -->
				<div id="change" class="col-md-2 col-sm-3 col-xs-5">
					<a ng-click="changeLanguage('chn')" href="javascript:;" translate="BUTTON_LANG_CHN">中文</a> |
					<a ng-click="changeLanguage('en')" href="javascript:;" translate="BUTTON_LANG_EN" >English</a>
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

<script src="js/angular-1.5.5.js"></script>
<script src="js/angular-cookies.js"></script>
<script src="js/angular-translate.min.js"></script>
<script src="js/angular-translate-storage-cookie.js"></script>
<script src="js/angular-translate-storage-local.js"></script>
<?php include 'i18n.php' ?>


