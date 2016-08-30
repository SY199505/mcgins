
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
   <title>Bootstrap 实例 - 模态框（Modal）插件</title>

   <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=5dEsfUlwMV0GdHlxoqgvlxE0"></script>  
</head>
<body>

<h2>创建模态框（Modal）</h2>
<!-- 按钮触发模态框 -->
<button class="btn btn-primary btn-lg" data-toggle="modal" 
   data-target="#myModal" id="createMap">
   开始演示模态框
</button>

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               模态框（Modal）标题
            </h4>
         </div> 	
         <div class="modal-body" id="maps" style="height:400px;">
            在这里添加一些文本
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">关闭
            </button>
            <button type="button" class="btn btn-primary">
               提交更改
            </button>
         </div>
      </div><!-- /.modal-content -->
</div><!-- /.modal -->
</div>
<script type="text/javascript">
$(function(){
$("#createMap").click(function(){
setTimeout(function() {//添加延时加载。解决问题
var map = new BMap.Map("maps");
var myCity = new BMap.LocalCity();
myCity.get(function(res){
	map.centerAndZoom(res.center,res.level); 
});
},300);
});
});
</script>
</body>
</html>
			
