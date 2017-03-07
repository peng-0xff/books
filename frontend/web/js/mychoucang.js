// JavaScript Document
$(document).ready(function(e) {
    $(".user ul a li").hover(function(){
		$(this).addClass("shoucang_libg");
		},function(){
			$(this).removeClass("shoucang_libg");
			})
    $('.user_list ul li a.a1').click(function(){
		confirm('确定要退出吗');
	})
});