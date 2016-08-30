<!-- 尾部 -->
<footer class="navbar-static-bottom ">
    <div id="footer">
        <div class="container ">
            <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-6 col-sm-6" >
                    <!-- 联系方式 -->
                    <ul class="col-xs-6">
                        <li><a href="mailto:09162839876@qq.com">邮箱：<?php foreach($footerInfo as $key=>$value) {echo $value -> webinfo_mail;}?></a></li>
                        <li><a href="www.mcgins.com">网址：<?php foreach($footerInfo as $key=>$value) {echo $value -> webinfo_website;}?></a></li>
                        <li><a href="tel:13809764375">电话：<?php foreach($footerInfo as $key=>$value) {echo $value -> webinfo_tel;}?></a></li>
                        <li><a href="">微信：<?php foreach($footerInfo as $key=>$value) {echo $value -> webinfo_wechat;}?></a></li>
                    </ul>
                </div>
                <!-- 地址 -->
                <div class="col-md-6">
                    <div class="addr col-md-8">联系地址：<br/><?php foreach($footerInfo as $key=>$value) {echo $value -> webinfo_addr;}?></div>
                    <div class="QR col-md-4">
                        <img src="img/QR code.jpg" alt="">
                    </div>
                </div>
            	
            </div>
            </div>
        </div>
    </div>
</footer>
<div id="power-by"></div>
<!-- 尾部结束 -->