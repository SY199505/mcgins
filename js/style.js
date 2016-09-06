//回到顶部
$(document).ready(function () {
    $.goup({
        trigger: 100,
        bottomOffset: 150,
        locationOffset: 100,
        title: '',
        titleAsText: true,
    });
});
//nav滑过
$('#nav li').hover(function(){
	$(this).addClass("choose");
}, function(){
	$(this).removeClass("choose");
});
	var bFlag = true;
$('#header button').on('click', function(){
	if(bFlag){
		$('#nav').css({
			'display': 'block'
		})
		bFlag = false;
	}else{
		$('#nav').css({
			'display': 'none'
		})
		bFlag = true; 	
	}
});