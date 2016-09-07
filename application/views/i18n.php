
<base href="<?php echo site_url();?>">
<!–[if lt IE 9]>

<script src=”http://www.angularjs.cn/wp-content/themes/angularjs/js/html5.js” type=”text/javascript”></script>

<![endif]–>
<script src="js/angular-1.5.5.js"></script>

<script>


var myApp = angular.module('myApp',['ngCookies','pascalprecht.translate']);



var translationsEN = {
  NAV:{
    'item1':'<?php echo $nav[0] -> name_en?>',
    'item2':'<?php echo $nav[1] -> name_en?>',
    'item3':'<?php echo $nav[2] -> name_en?>',
    'item4':'<?php echo $nav[3] -> name_en?>',
    'item5':'<?php echo $nav[4] -> name_en?>',
    'item6':'<?php echo $nav[5] -> name_en?>',
    'item7':'<?php echo $nav[6] -> name_en?>',
    'item8':'<?php echo $nav[7] -> name_en?>',
  },
  Features:{
    <?php
      foreach ($features as $fe) {
    ?>

    'item<?php echo $fe -> features_id ?>':{
      'title<?php echo $fe -> features_id ?>':'<?php echo $fe -> features_title_en ?>',
      'content<?php echo $fe -> features_id ?>':'<?php echo $fe -> features_en ?>'
    },

    <?php
      }
    ?>

  },
  BUTTON_LANG_CHN: '中文',
  BUTTON_LANG_EN: 'ENGLISH',
  BG_COLOR: 'enStyle',
  JUSTIFY: 'justify',
  ABOUT_US: '<?php echo $aboutUs[0] -> aboutUs_en ?>',
  EMAIL: 'Email : ',
  WEBSITE: 'Website : ',
  TEL: 'Tel : ',
  WEICHAT: 'Weichat : ',
  CONTACT: 'Address : ',
  ADDRESS: 'Suihua Road, Nangang District, Harbin City, Heilongjiang Province',
  CONTACTUS: 'Contact Us',
  PHONE: 'Phone : '
}

var translationsCHN = {
  NAV:{
    'item1':'<?php echo $nav[0] -> name_ch?>',
    'item2':'<?php echo $nav[1] -> name_ch?>',
    'item3':'<?php echo $nav[2] -> name_ch?>',
    'item4':'<?php echo $nav[3] -> name_ch?>',
    'item5':'<?php echo $nav[4] -> name_ch?>',
    'item6':'<?php echo $nav[5] -> name_ch?>',
    'item7':'<?php echo $nav[6] -> name_ch?>',
    'item8':'<?php echo $nav[7] -> name_ch?>',
  },
  Features:{
    <?php
      foreach ($features as $fe) {
    ?>

    'item<?php echo $fe -> features_id ?>':{
      'title<?php echo $fe -> features_id ?>':'<?php echo $fe -> features_title_chn ?>',
      'content<?php echo $fe -> features_id ?>':'<?php echo $fe -> features_chn ?>'
    },

    <?php
      }
    ?>
    
  },
  BUTTON_LANG_CHN: '中文',
  BUTTON_LANG_EN: 'ENGLISH',
  BG_COLOR: 'chnStyle',
  JUSTIFY: '',
  ABOUT_US: '<?php echo $aboutUs[0] -> aboutUs_chn ?> ',
  EMAIL: '邮箱：',
  WEBSITE: '网址：',
  TEL: '电话：',
  WEICHAT: '微信：',
  CONTACT: '联系地址：',
  ADDRESS: '黑龙江省哈尔滨市南岗哈西绥化路纳帕英郡S57(松雷中学斜对面，69路、83路纳帕英郡小区站)',
  CONTACTUS: '联系我们',
  PHONE: '手机 :'
  

}


myApp.config(['$translateProvider', function ($translateProvider) {
  // add translation table
  $translateProvider.translations('chn', translationsCHN);
  $translateProvider.translations('en', translationsEN);
  $translateProvider.preferredLanguage('chn');
  $translateProvider.fallbackLanguage('chn');
  $translateProvider.useSanitizeValueStrategy('escape');
  //存储语言设置
  $translateProvider.useLocalStorage();
  
  //$translateProvider.useCookieStorage();

}]);


myApp.controller('myCtrl', ['$translate', '$scope', '$sce',function ($translate, $scope,$sce) {
  $scope.changeLanguage = function (langKey) {
    $translate.use(langKey);
  };
}]);



</script>