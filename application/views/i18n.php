

<script>


var myApp = angular.module('myApp',['ngCookies','pascalprecht.translate']);



var translationsEN = {
  NAV:{
    'item1':'Index',
    'item2':'About Us',
    'item3':'Course',
    'item4':'Team',
    'item5':'Recruit',
    'item6':'FAQ',
    'item7':'Contact',
    'item8':'News',
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
  CONTACTUS: 'Contact Us'
}

var translationsCHN = {
  NAV:{
    'item1':'首页',
    'item2':'关于我们',
    'item3':'课程体系',
    'item4':'麦金思团队',
    'item5':'招聘信息',
    'item6':'常见问题',
    'item7':'联系我们',
    'item8':'最新动态',
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
  CONTACTUS: '联系我们'
  

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