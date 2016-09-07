<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>McGins English后台管理</title>
    <meta name="description" content="这是一个 table 页面">
    <meta name="keywords" content="table">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <base href="<?php echo site_url();?>">

    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="assets/css/admin.css">
    <style>
        .icheckbox_square-blue{
            width: 24px;
            height: 24px;
        }
        .hidden{
            display: none;
        }
        .list{
            margin-top: 25px;
        }
    </style>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<?php include 'admin-header.php'; ?>

<div class="am-cf admin-main">
    <?php include 'admin-sidebar.php'; ?>

    <!-- content start -->
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">导航栏列表界面</strong> | <a class="am-badge am-badge-success am-square">Admin List</a></div>
        </div>

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
<!--                        <button type="button" class="am-btn am-btn-default add"><span class="am-icon-plus"></span><a href="admin/add_admin"> 新增</a></button>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="am-g list">
<!--            <form action="admin/update_nav" method="post">-->
                <div class="am-u-sm-12">
                    <table class="am-table am-table-striped am-table-hover table-main">
                        <thead>
                        <tr>
                            <th class="table-id">序号</th>
                            <th class="table-username">中文名称</th>
                            <th class="table-username">显示/隐藏</th>
                            <th class="table-username">英文名称</th>
                            <th class="table-username">显示/隐藏</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($nav as $nav){
                            ?>
                            <tr>
                                <td><?php echo $nav -> id ;?></td>
                                <td><a href="#"><?php echo $nav -> name_ch; ?></a></td>
                                <td><input type="checkbox" class="ch"  <?php echo $nav -> ch=='true'?'checked':'' ;?> data-id="<?php echo $nav -> id;?>"/></td>
                                <td><a href="#"><?php echo $nav -> name_en; ?></a></td>
                                <td><input type="checkbox" class="en"  <?php echo $nav -> en=='true'?'checked':'' ;?> data-id="<?php echo $nav -> id;?>" /></td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
<!--                <div class="am-u-sm-8 am-u-md-6 am-u-end col-end">-->
<!--                    <button type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>-->
<!--                    <button type="button" class="am-btn am-btn-primary am-btn-xs" id="btn-return">放弃保存</button>-->
<!--                </div>-->
<!--            </form>-->
        </div>
    </div>
    <!-- content end -->
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>


<!--弹出层-->
<div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">Warning!</div>
        <div class="am-modal-bd">
            当前用户没有编辑权限
        </div>
        <div class="am-modal-footer">
            <span class="am-modal-btn">确定</span>
        </div>
    </div>
</div>
<!--弹出层-->

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script>
    $(function(){
        $('.ch').on('click',function(){
            var id = $(this).data('id');
            var show = this.checked;
            console.log(id);
            console.log(show);
            $.get('admin/update_nav_ch',
                {
                    ch_id : id,
                    ch_show : show
                },
            function(row){
                if(row == 'success'){

                }
            });
        });
        $('.en').on('click',function(){
            var id = $(this).data('id');
            var show = this.checked;
            console.log(id);
            console.log(show);
            $.get('admin/update_nav_en',
                {
                    en_id : id,
                    en_show : show
                },
                function(row){
                    if(row == 'success'){

                    }
                });
        });
    });


</script>
</body>
</html>
